<?php require_once APPROOT.'/views/inc/header.php';?>

<h1>REGISTER</h1>
<form action="<?php echo BASEURL ?>/user/register" method="post" id="form-login" enctype="multipart/form-data">
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

        <div class="form-group">
            <label for="cpassword">Confirm Password : </label>
            <input type="password" class="form-control <?php echo (!empty($data['cpassword_err'])) ? 'is-invalid' : ''; ?>" name="cpassword" id="cpassword">
            <br><span class="invalid-feedback"><?php echo $data['cpassword_err'] ?></span>
        </div>


        <div class="form-group">
            <label for="nama">Full Name : </label>
            <input type="text" class="form-control <?php echo (!empty($data['nama_err'])) ? 'is-invalid' : ''; ?>" name="nama" id="nama">
            <br><span class="invalid-feedback"><?php echo $data['nama_err'] ?></span>
        </div>

        <div class="form-group">
            <label for="email">E-mail : </label>
            <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" name="email" id="email">
            <br><span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
        </div>

        <div class="form-group">
            <label for="level">Level : </label>
            <input type="number" class="form-control <?php echo (!empty($data['level_err'])) ? 'is-invalid' : ''; ?>" name="level" id="level">
            <br><span class="invalid-feedback"><?php echo $data['level_err'] ?></span>
        </div>

        <button type="submit" name="register">SUBMIT</button>
    </div>
</form>

<?php require_once APPROOT.'/views/inc/footer.php';?>