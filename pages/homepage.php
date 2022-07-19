<?php

/**
 * Template Name: Da Nang Tech Homepage
 *
 * @package Genesis\Templates
 */

get_header();
?>
<!-- Spinner Start -->
<!-- <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
<!-- Spinner End -->

<!-- Hero start -->
<div class="position-relative py-md-3">
    <div class="hero-header position-relative">
        <div class="position-absolute top-0 start-0 w-100 h-100 z-index-flat">
            <img class="img-fluid w-100 h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner.png" alt="Hero Image">
        </div>
        <div class="container-xxl position-relative z-index-above">
            <div class="px-md-4 px-lg-5 py-3 py-lg-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="hero-header-content">
                            <h2 class="mb-3">
                                DanangTech cung cấp các dịch vụ tốt nhất cho trang web của bạn
                            </h2>
                            <div class="pb-3">
                                <p>
                                    DanangTech hoạt động với hơn 3 năm kinh nghiệm mang đến các giải pháp công
                                    nghệ tốt
                                    nhất, phù hợp nhất cho các doanh nghiệp tại Đà Nẵng
                                </p>
                                <p>
                                    Hotline: 0905-60-73-77
                                </p>
                            </div>
                            <a href="" class="btn btn-primary border-2 py-3 px-5">
                                Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Section Service start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="px-md-4 px-lg-5">
            <div class="mx-auto text-center">
                <div class="d-inline-block text-primary px-4 mb-3">DỊCH VỤ</div>
                <h2 class="mb-5 section-heading">Dịch vụ của DanangTech</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <a href="/thiet-ke-website-tai-da-nang/">
                        <div class="card-item pointer h-100">
                            <div class="d-flex justify-content-between">
                                <div class="card-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesign.svg" alt="Thiết kế website" />
                                </div>
                            </div>
                            <div class="card-content">
                                <h5 class="mb-3">Thiết kế website</h5>
                                <span>
                                    Xây dựng một website chuyên nghiệp tốt nhất đại diện cho doanh nghiệp với giá
                                    phù hợp
                                </span>
                            </div>
                            <div class="card-direction">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Thiết kế website">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="/marketing-online-da-nang/">
                        <div class="card-item pointer h-100">
                            <div class="d-flex justify-content-between">
                                <div class="card-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mkt.svg" alt="Marketing Online" />
                                </div>
                            </div>
                            <div class="card-content">
                                <h5 class="mb-3">Marketing Online</h5>
                                <span>
                                    Quảng bá doanh nghiệp hàng tháng trên Internet để tiếp cận khách hàng đang tìm
                                    kiếm sản phẩm, dịch vụ của bạn
                                </span>
                            </div>
                            <div class="card-direction">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Thiết kế website">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="/quan-tri-website-tai-da-nang/">
                        <div class="card-item pointer h-100">
                            <div class="d-flex justify-content-between">
                                <div class="card-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/manage.svg" alt="Quản trị Website" />
                                </div>
                            </div>
                            <div class="card-content">
                                <h5 class="mb-3">Quản trị Website</h5>
                                <span>
                                    Đảm bảo việc chăm sóc, quản trị Website được thực hiện thường xuyên giúp Website
                                    hoạt động một cách hiệu quả nhất.
                                </span>
                            </div>
                            <div class="card-direction">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Thiết kế website">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="/hosting-tai-da-nang/">
                        <div class="card-item pointer h-100">
                            <div class="d-flex justify-content-between">
                                <div class="card-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hosting.svg" alt="Dịch vụ lưu trữ web" />
                                </div>
                            </div>
                            <div class="card-content">
                                <h5 class="mb-3">Dịch vụ lưu trữ web</h5>
                                <span>
                                    Hosting an toàn, tin cậy giá tốt nhất tại Đà Nẵng. Tự động quét virus và backup
                                    dữ liệu trên hosting thường xuyên
                                </span>
                            </div>
                            <div class="card-direction">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Thiết kế website">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="/domain-tai-da-nang/">
                        <div class="card-item pointer h-100">
                            <div class="d-flex justify-content-between">
                                <div class="card-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/domain.svg" alt="Tên miền" />
                                </div>
                            </div>
                            <div class="card-content">
                                <h5 class="mb-3">Tên miền</h5>
                                <span>
                                    Thủ tục đăng ký nhanh chóng. Tư vấn chọn tên miền theo thương hiệu, bảo vệ tên
                                    miền theo pháp luật.
                                </span>
                            </div>
                            <div class="card-direction">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Thiết kế website">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="/phan-mem-doanh-nghiep/">
                        <div class="card-item pointer h-100">
                            <div class="d-flex justify-content-between">
                                <div class="card-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product-tech.svg" alt="Sản phẩm công nghệ" />
                                </div>
                            </div>
                            <div class="card-content">
                                <h5 class="mb-3">Sản phẩm công nghệ</h5>
                                <span>
                                    Mang đến các sản phẩm công nghệ số tốt nhất để hỗ trợ các doanh nghiệp tại Đà
                                    Nẵng
                                </span>
                            </div>
                            <div class="card-direction">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg" alt="Thiết kế website">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section Service end -->

<!-- Form contact start -->
<!-- Form contact end -->

<!-- Section About us start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="px-md-4 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-about-us.png" alt="About Us">
                </div>
                <div class="col-lg-6">
                    <div class="px-0 px-md-4">
                        <div class="d-inline-block text-primary mb-3">VỀ CHÚNG TÔI</div>
                        <h2 class="mb-4 section-heading">DanangTech cung cấp mọi thứ bạn cần để kinh doanh thành
                            công trên Internet
                        </h2>
                        <p class="mb-4">Thiết kế website đẹp, chất lượng và quảng bá trên Internet với các giải
                            pháp
                            Online Marketing chuyên nghiệp hàng tháng với chi phí tốt nhất để đẩy mạnh kinh
                            doanh
                            trên
                            Internet cho các doanh nghiệp tại Đà Nẵng.</p>

                        <a class="btn btn-outline-primary py-3 px-5 mt-2" href="/gioi-thieu/">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section About us end -->

<!-- Section why choose start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="px-md-4 px-lg-5">
            <div class="row g-5 align-items-center justify-content-center flex-column-reverse flex-md-row">
                <div class="col-lg-6">
                    <div class="px-0 px-md-4">
                        <div class="d-inline-block text-primary mb-3">VÌ SAO CHỌN CHÚNG TÔI?</div>
                        <h2 class="mb-4 section-heading">DanangTech đã đạt được những gì trong những năm vừa qua.</h2>
                        <div class="mb-4">
                            <div class="row gy-4">
                                <div class="col-md-6 col-6">
                                    <div class="counter-item py-3 py-md-0">
                                        <div class="p-0">
                                            <h5 class="mb-1">200+</h5>
                                            <span>
                                                Dự án thành công
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="counter-item py-3 py-md-0">
                                        <div class="p-0">
                                            <h5 class="mb-1">190+</h5>
                                            <span>
                                                Khách hàng hài lòng
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="counter-item py-3 py-md-0">
                                        <div class="p-0">
                                            <h5 class="mb-1">150+</h5>
                                            <span>
                                                Khách hàng thường xuyên
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="counter-item py-3 py-md-0">
                                        <div class="p-0">
                                            <h5 class="mb-1">200+</h5>
                                            <span>
                                                Nhận xét của khách hàng
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-about-us-2.png" alt="About Us">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section Why choose end -->

<!-- Feedback Start -->
<div class="section-with-bg">
    <div class="container-xxl py-md-5">
        <div class="container-xxl">
            <div class="mx-auto text-center">
                <div class="d-inline-block text-primary px-4 mb-3">FEADBACK</div>
                <h2 class="mb-5 section-heading">Khách hàng nói gì về chúng tôi!</h2>
            </div>
            <div class="px-4 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="p-4">
                        <div class="testimonial-item">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png">
                                <div class="ps-3">
                                    <h6 class="mb-1">Client Name</h6>
                                    <small class="text-muted">Profession</small>
                                </div>
                            </div>
                            <p class="text-center">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore
                                diam</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="testimonial-item">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png">
                                <div class="ps-3">
                                    <h6 class="mb-1">Client Name</h6>
                                    <small class="text-muted">Profession</small>
                                </div>
                            </div>
                            <p class="text-center">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore
                                diam</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="testimonial-item">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png">
                                <div class="ps-3">
                                    <h6 class="mb-1">Client Name</h6>
                                    <small class="text-muted">Profession</small>
                                </div>
                            </div>
                            <p class="text-center">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore
                                diam</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="testimonial-item">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png">
                                <div class="ps-3">
                                    <h6 class="mb-1">Client Name</h6>
                                    <small class="text-muted">Profession</small>
                                </div>
                            </div>
                            <p class="text-center">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore
                                diam</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="testimonial-item">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avatar.png">
                                <div class="ps-3">
                                    <h6 class="mb-1">Client Name</h6>
                                    <small class="text-muted">Profession</small>
                                </div>
                            </div>
                            <p class="text-center">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore
                                diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feedback End -->

<!-- News Start -->
<div class="container-xxl py-5">
    <div class="container my-md-5 my-3">
        <div class="mx-auto text-center">
            <div class="d-inline-block text-primary px-4 mb-3">TIN TỨC</div>
            <h2 class="mb-5 section-heading">Cập nhật tin tức mới nhất</h2>
        </div>
        <div class="px-md-4 px-lg-5">
            <div class="row g-5">
                <?php
                $args = array(
                    'post_status' => 'publish',
                    'posts_per_page' => 6
                );
                $results = new WP_Query($args);

                if ($results->have_posts()) :
                    while ($results->have_posts()) : $results->the_post();
                ?>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="card border-0">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (get_the_post_thumbnail(get_the_ID()) != '') : ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php echo get_the_title(); ?>">
                                    <?php else : ?>
                                        <img src="<?php echo catch_that_image(); ?>" class="card-img-top" alt="<?php echo get_the_title(); ?>">
                                    <?php endif; ?>
                                    <div class="card-body px-0 pb-0">
                                        <h5 class="card-title mb-2"><?php the_title(); ?></h5>
                                        <div class="mb-3 d-flex">
                                            <div class="card-info">
                                                <i class="fa">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/user.svg" alt="author">
                                                </i>
                                                <small><?php echo get_the_author(); ?></small>
                                            </div>
                                            <div class="card-info mx-5">
                                                <i class="fa">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calendar.svg" alt="publish date">
                                                </i>
                                                <small><?php echo get_the_date(); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="card-link">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="d-block text-center my-md-5 my-4 py-4">
            <a class=" btn btn-outline-primary py-3 px-5" href="/tin-tuc/">Xem thêm</a>
        </div>
    </div>
</div>
</div>
<!-- News End -->

<?php
get_footer();
?>