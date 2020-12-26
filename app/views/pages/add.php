<?php
   require APP_ROOT . '/views/layouts/header.php';
   require APP_ROOT . '/views/layouts/navbar.php';
?>
<div class="container">
    <form method="GET" action="<?php echo $_SERVER['REQUEST_URI'].'/pages'?>">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Create </button>
        </div>
    </form>
</div>
<?php
   require APP_ROOT . '/views/layouts/footer.php';
?>