<footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-5 col-md-6 ">
                    <h3 class="footer-head">CÔNG TY THHN MTV ANDEVSHOP</h3>
                    <ul class="menu">
                        <li><a href="#">© by andevshop</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-6">
                    <h3 class="footer-head">THÔNG TIN CHI TIẾT</h3>
                    <ul class="menu">
                        <li><a href="#"> Điện thoại: +84 374 18x xxx</a></li>
                        <li><a href="#">Email: anvndev@gmail.com</a></li>
                        <li><a href="#">Địa chỉ: VQ4P+249, Phường Tân Phú, Quận 9, Thành phố Hồ Chí Minh</a></li>
                    </ul>
                </div>
                <div class="col-2 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            ANDEVSHOP
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- app js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
  <?php if(isset($_SESSION['message']))
  {
  ?>
    alertify.set('notifier','position', 'top-right');
    alertify.success('<?= $_SESSION['message'] ?>');
  <?php 
    unset($_SESSION['message']);
  }
  ?>
</script>
