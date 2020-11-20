<?php require_once APPROOT.'/views/inc/header.php';?>

<h1>FORM ADD NEW STUDIO</h1>
<form action="<?php echo BASEURL ?>/studio/tambah" method="post" id="form-studio" enctype="multipart/form-data">
    <div class="form-box">
        <div class="form-group">
            <label for="nama">Studio Name : </label>
            <input type="text" class="form-control <?php echo (!empty($data['nama_err'])) ? 'is-invalid' : ''; ?>" name="nama" id="nama">
            <br><span class="invalid-feedback"><?php echo $data['nama_err'] ?></span>
        </div>

        <div class="form-group">
            <label for="lokasi">Location : </label>
            <input type="text" class="form-control <?php echo (!empty($data['lokasi_err'])) ? 'is-invalid' : ''; ?>" name="lokasi" id="lokasi">
            <br><span class="invalid-feedback"><?php echo $data['lokasi_err'] ?></span>
        </div>

        <div class="form-group">
            <label for="deskripsi">Description : </label>
            <textarea class="form-control <?php echo (!empty($data['deskripsi_err'])) ? 'is-invalid' : ''; ?>" name="deskripsi" id="deskripsi" form="form-studio" cols="30" rows="10"></textarea>
            <br><span class="invalid-feedback"><?php echo $data['deskripsi_err'] ?></span>
        </div>

        <div class="form-group">
            <label for="imageStudio">Photo : </label><br>
            <input type="file" class="form-control" name="imageStudio" id="imageStudio">
            <br><span class="invalid-feedback"><?php echo $data['image_err'] ?></span>
        </div>

        <button type="submit" name="add-studio">SUBMIT</button>
    </div>
</form>

<?php require_once APPROOT.'/views/inc/footer.php';?>