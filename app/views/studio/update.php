<?php require_once APPROOT.'/views/inc/header.php';?>

<h1>UPDATE STUDIO</h1>
<form action="<?php echo BASEURL ?>/studio/update/<?php echo $data['studio']['id']; ?>" method="post" id="form-studio" enctype="multipart/form-data">
    <div class="form-box">
        <div class="form-group">
            <label for="nama">Studio Name : </label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['studio']['nama']; ?>">
        </div>

        <div class="form-group">
            <label for="lokasi">Location : </label>
            <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?php echo $data['studio']['lokasi']; ?>">
        </div>

        <div class="form-group">
            <label for="deskripsi">Description : </label><br>
            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="40" rows="10" form="form-studio"><?php echo $data['studio']['deskripsi']; ?></textarea>
        </div>

        <div class="form-group">
            <label for="deskripsi">Last Photo : </label><br>
            <img src="<?php echo BASEURL ?>/public/upload/studio/<?php echo $data['studio']['image'] ?>" alt="">
        
            <input type="hidden" name="image_og" id="image_og" value="<?php echo $data['studio']['image'] ?>"><br><br>

            <label for="deskripsi">Photo : </label><br>
            <input type="file" class="form-control" name="imageStudio" id="imageStudio">
        </div>
        
        <button type="submit" name="update-studio">SUBMIT</button>
    </div>
</form>

<?php require_once APPROOT.'/views/inc/footer.php';?>