<?php 
$type_post = true;
include("./includes/header.php") ;
?>;

<body>
    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="index.php">Trang chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./intro.php">Thông tin shop</a>
                </div>
            </div>
            
            <div class="box">
                <div class="box-header">
                    Thông tin AndevShop
                </div>
                <?php
                    foreach($intros as $intro) { 
                ?>
                    <div class="intro-page">
                        <div class="intro-img-page">
                            <img src="./images/<?= $intro['img'] ?>" alt="">
                        </div>
                        <div class="intro-info-page">
                            <div class="intro-title-page">
                                <?= $intro['title'] ?>
                            </div>
                            <div class="intro-preview-page">
                                <?= $intro['small_content'] ?>
                            </div>
                            <a href="./intro-detail.php?slug=<?= $intro['slug'] ?>">
                                <button class="btn-flat btn-hover btn-read-page">Đọc thêm</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- end product-detail content -->
    <?php include("./includes/footer.php") ?>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>