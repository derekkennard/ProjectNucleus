    <div class="card" style="width: 33%;">
        <div class="card-body">
            <h5 class="card-title">Register User</h5>
            <h6 class="card-subtitle mb-2 text-muted">Sign up a user</h6>
            <br/>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input class="btn btn-primary" name="submit" type="submit" value="Submit"/>
            </form>
        </div>
    </div>