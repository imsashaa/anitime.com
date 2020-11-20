<?php require_once APPROOT.'/views/inc/header.php';?>

<h1>LOGIN</h1>
<form action="<?php echo BASEURL ?>/user/login" method="post" id="form-login" enctype="multipart/form-data">
    <div class="form-box">
        <div class="form-group">
            <label for="username">Username : </label>
            <input type="text" class="form-control <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" name="username" id="username">
            <br><span class="invalid-feedback"><?php echo $data['username_err'] ?></span>
        </div>

        <div class="form-group">
            <label for="password">Password : </label>
            <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" id="password">
            <br><span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
        </div>

        <button type="submit" name="login">SUBMIT</button>
    </div>
</form>

<?php require_once APPROOT.'/views/inc/footer.php';?>