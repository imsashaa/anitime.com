<?php require_once APPROOT.'/views/inc/header.php';?>

<div class="anime-detail">
    <img src="<?php echo BASEURL ?>/public/upload/anime/<?php echo $data['anime']['image'] ?>">
    <div class="anime-info">
        <h1><?php echo $data['anime']['judul'] ?></h2><hr>
        <h3><a href="<?php echo BASEURL ?>/studio/detail/<?php echo $data['anime']['id_studio'] ?>"><?php echo $data['anime']['nama'] ?></a></h3>
        <h4>Release : <?php echo $data['anime']['tahun_rilis'] ?></h4>
        <h4>Total Episode : <?php echo $data['anime']['total_eps'] ?></h4>

        <div class="anime-desc">
            <p><?php echo $data['anime']['sinopsis'] ?></p>
        </div>
    </div>
</div>
<div class="card-list">

</div>

<?php require_once APPROOT.'/views/inc/footer.php';?>