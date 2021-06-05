<?php
class UserModel extends Model
{
    public function register()
    {
        //Santize the post array
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = sha1($post['password']);

        if ($post['submit']) {
            if($post['name']== '' || $post['email']== '' || $post['password']== '' ) {
                Messages::setMsg('You are missing a required field. Please try again', 'error');
                return;
            }
            //INSERT in db
            $this->query('INSERT INTO users (name, email, password) values(:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();
            //Verify
            if ($this->lastInsertId()) {
                header('Location: ' . ROOT_URL . 'users/login');
            }

        }
        return;
    }

    public function login()
    {
        //Santize the post array
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = sha1($post['password']);

        if ($post['submit']) {
            // compare login
            $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();
            $row = $this->single();
            if($row ){
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id"    => $row['id'],
                    "name"  => $row['name'],
                    "email" => $row['email']
                );
                header('Location: ' . ROOT_URL . 'shares');
            } else {
                Messages::setMsg('Incorrect Login', 'error');
            }

        }
        return;
    }
}