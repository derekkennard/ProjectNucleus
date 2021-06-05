<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
    <?php endif; ?>
    <?php if (isset($viewmodel)) {
        foreach ($viewmodel as $item) : ?>
        <div class="card mt-2">
            <div class="card-body">
                <h3><?php echo $item['title']; ?></h3>
                <small><?php echo $item['create_date']; ?></small>
                <hr/>
                <p><?php echo $item['body']; ?></p>
                <br/>
                <a class="btn btn-light btn-outline-dark" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
            </div>
        </div>
        <?php endforeach;
    } else {
        echo 'Viewmodel is NOT set!';
    } ?>
</div>