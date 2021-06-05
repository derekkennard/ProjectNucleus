<div class="card" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">Share Something</h5>
        <h6 class="card-subtitle mb-2 text-muted">Share something here for the whole world to enjoy</h6>
        <br/>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="col-6 mb-3">
                <label class="form-label">Share Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="col-12 mb-3">
                <label class="form-label">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="col-6 mb-3">
                <label>Link</label>
                <input type="text" class="form-control" name="link">
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>">Cancel</a>
        </form>
    </div>
</div>
