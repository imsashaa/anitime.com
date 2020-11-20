<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?= $data['judul'] ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>"> -->
</head>
<body>
    <nav>
        <div class="header">
            <a class="logo" href="<?php echo BASEURL ?>"><img src="<?php echo BASEURL ?>/public/img/anitime.png"></a>

            <div class="navbar">
                <ul>
                    <li>
                        <a href="<?php echo BASEURL ?>">HOME</a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL ?>/studio">STUDIO</a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL ?>/about/index">ABOUT</a>
                    </li>
                </ul>
            </div>
            
            <div class="nav-user">
                <ul>
                    <?php if (isset($_SESSION['username'])):?>
                        <div class="user">
                            <li>
                                <h3><?php $user = strtoupper($_SESSION['username']); echo $user ?></h3>
                            </li>
                            <li>
                                <a href="<?php echo BASEURL ?>/user/logout">LOGOUT</a>
                            </li>
                        </div>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo BASEURL ?>/user/login">LOGIN</a>
                        </li>
                        <li>
                            <a href="<?php echo BASEURL ?>/user/register">REGIST</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">