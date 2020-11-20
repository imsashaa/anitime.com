<?php require_once APPROOT.'/views/inc/header.php';?>
<div class="container">
    <!-- <h2>AniTime Homepage</h2> -->
    <!-- <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

                <div class="slide-first">
                    <img src="<?php echo BASEURL ?>/public/upload/anime/<?php echo $data['anime']['image'] ?>">
                </div>
                <?php next($data['anime']); foreach($data['anime'] as $anime) :?>
                    <div class="slide">
                        <img src="<?php echo BASEURL ?>/public/upload/anime/<?php echo $data['image'] ?>">
                    </div>
                <?php endforeach ?>
        </div>
    </div> -->

    <div class="std-list">
        <div class="card-anime">
            <?php foreach($data['anime'] as $anime) :?>
                <div class="title-card">
                    <div class="card-img">
                        <a href="<?php echo BASEURL ?>/home/detail/<?php echo $anime['id'] ?>"><img src="<?php echo BASEURL ?>/public/upload/anime/<?php echo $anime['image'] ?>"></a>
                    </div>
                    <div class="card-info">
                        <a href="<?php echo BASEURL ?>/home/detail/<?php echo $anime['id'] ?>"><?php echo $anime['judul']; ?></a>
                        <?php if (isset($_SESSION['username'])):?>
                            <div class="card-action">
                                <a href="<?php echo BASEURL ?>/studio/update/<?php echo $anime['id'] ?>"><img src="<?php echo BASEURL ?>/public/icon/edit.png"></a>
                                <a href="<?php echo BASEURL ?>/studio/hapus/<?php echo $anime['id'] ?>"><img src="<?php echo BASEURL ?>/public/icon/delete.png"></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div> 
    </div>

</div>
<?php require_once APPROOT.'/views/inc/footer.php';?>