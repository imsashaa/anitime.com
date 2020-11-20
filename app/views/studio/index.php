<?php require_once APPROOT.'/views/inc/header.php';?>

<h2>List Studio's</h2>

<?php if (isset($_SESSION['username'])):?>
    <a class="button" href="<?php echo BASEURL ?>/studio/tambah">Add New Studio</a>
<?php endif; ?>

<div class="std-list">
    <div class="card-list">
        <?php foreach($data['studio'] as $std) :?>
            <div class="std-card">
                <div class="card-img">
                    <img src="<?php echo BASEURL ?>/public/upload/studio/<?php echo $std['image'] ?>">
                </div>
                <div class="card-info">
                    <a href="<?php echo BASEURL ?>/studio/detail/<?php echo $std['id'] ?>"><?php echo $std['nama']; ?></a>
                    <?php if (isset($_SESSION['username'])):?>
                        <div class="card-action">
                            <a href="<?php echo BASEURL ?>/studio/update/<?php echo $std['id'] ?>"><img src="<?php echo BASEURL ?>/public/icon/edit.png"></a>
                            <a href="<?php echo BASEURL ?>/studio/hapus/<?php echo $std['id'] ?>"><img src="<?php echo BASEURL ?>/public/icon/delete.png"></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach ?>
    </div> 
</div>

<?php require_once APPROOT.'/views/inc/footer.php';?>