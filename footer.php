<?php

/**
 * Fires immediately after the site inner closing markup, before `genesis_footer` action hook.
 *
 * @since 1.0.0
 */
do_action( 'genesis_before_footer' );

?>

<!-- Footer Start -->
<footer class="section-with-bg">
    <div class="container-fluid footer pt-md-5 pb-4">
        <div class="container">
            <div class="px-md-4 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo@2x.png" alt="Logo">
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="mb-4">Dịch vụ</h5>
                        <div class="row flex-column gy-1">
                            <a class="d-block" href="">About Us</a>
                            <a class="d-block" href="">Contact Us</a>
                            <a class="d-block" href="">Privacy Policy</a>
                            <a class="d-block" href="">Terms & Condition</a>
                            <a class="d-block" href="">Career</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="mb-4">Về DanangTech</h5>
                        <div class="row flex-column gy-1">
                            <a class="d-block" href="">About Us</a>
                            <a class="d-block" href="">Contact Us</a>
                            <a class="d-block" href="">Privacy Policy</a>
                            <a class="d-block" href="">Terms & Condition</a>
                            <a class="d-block" href="">Career</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="mb-4">Liên hệ</h5>

                        <p class="d-flex align-items-baseline mb-2">
                            <i class="fa me-3" style="flex: 0 0 20px">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/map-pin.svg" alt="Address">
                            </i>
                            206 Huỳnh Ngọc Huệ - Quận Thanh Khê - TP. Đà Nẵng
                        </p>
                        <p class="mb-2">
                            <i class="fa me-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone.svg" alt="Hotline">
                            </i>
                            (+84) 905-60-73-77 (Hotline)
                        </p>
                        <p>
                            <i class="fa me-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mail.svg" alt="Hotline">
                            </i>
                            info@danangtech.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pt-4 mt-5 px-md-4 px-lg-5">
                    <div class="copyright">
                        <div class="row align-md-items-center">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; Copyright 2021 DanangTech. All rights reserved.
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a class="btn btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-social" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-social" href=""><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" integrity="sha512-lo4YgiwkxsVIJ5mex2b+VHUKlInSK2pFtkGFRzHsAL64/ZO5vaiCPmdGP3qZq1h9MzZzghrpDP336ScWugUMTg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<?php
/**
 * Fires immediately before wp_footer(), after the site container closing markup.
 *
 * @since 1.0.0
 */
do_action( 'genesis_after' );
wp_footer(); // We need this for plugins.

genesis_markup(
	[
		'close'   => '</body>',
		'context' => 'body',
	]
);

?>
</html>
