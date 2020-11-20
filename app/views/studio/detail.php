<?php require_once APPROOT.'/views/inc/header.php';?>

<div class="std-detail">
    <div class="std-info">
        <h1><?php echo $data['studio']['nama'] ?></h2>
        <hr>
        <h3><?php echo $data['studio']['lokasi'] ?></h3>
    </div>
    <img src="<?php echo BASEURL ?>/public/upload/studio/<?php echo $data['studio']['image'] ?>">
</div>
<div class="std-desc">
    <p><?php echo $data['studio']['deskripsi'] ?></p>
</div>
<div class="card-list">

</div>

<?php require_once APPROOT.'/views/inc/footer.php';?>