<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section header-normal">
    <div class="container-fluid">
        <div class="logo">
            <a href="<?=$_SERVER['PHP_SELF'];?>">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div class="top-social">
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <?php
        require_once ($layoutDir . "/menu.php");
        ?>
    </div>
</header>
<!-- Header End -->
<?php