<?php

/**
 * Template Name: Da Nang Tech Management Website
 *
 * @package Genesis\Templates
 */

get_header(); // displays header

// This file handles pages, but only exists for the sake of child theme forward compatibility.// Removes breadcrumbs.
get_template_part('template-parts/head-banner');
get_template_part('template-parts/breadcrumb');

?>

<!-- Section About us start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="px-md-4 px-lg-5">
            <div class="row gx-5 align-items-center justify-content-center flex-column-reverse flex-md-row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/content/web-management/web-manage.png" alt="Web Design">
                </div>
                <div class="col-lg-6">
                    <div class="px-0">
                        <h2 class="mb-4 section-heading">
                            Quản trị Website tại Đà Nẵng
                        </h2>
                        <div>
                            <p>
                                DanangTech cung cấp dịch vụ quản trị Website tại Đà Nẵng.
                            </p>
                            <p>
                                Với chi phí tốt nhất, đảm bảo việc chăm sóc Website hay quản trị Website được thực hiện thường xuyên giúp Website hoạt động một cách hiệu quả nhất.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section About us end -->

<!-- Section Service start -->
<div class="section-with-bg">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="px-md-4 px-lg-5">
                <div class="mx-auto text-center">
                    <h2 class="mb-5 section-heading">Lợi ích của việc quản trị Website</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <a href="/thiet-ke-website-tai-da-nang/">
                            <div class="card-item pointer h-100">
                                <div class="d-flex justify-content-center">
                                    <div class="card-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesign.svg" alt="Thiết kế website" />
                                    </div>
                                </div>
                                <div class="card-content text-center">
                                    <h5 class="mb-3">Thiết kế website</h5>
                                    <span>
                                        Xây dựng một website chuyên nghiệp tốt nhất đại diện cho doanh nghiệp với giá
                                        phù hợp
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="/marketing-online-da-nang/">
                            <div class="card-item pointer h-100">
                                <div class="d-flex justify-content-center">
                                    <div class="card-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mkt.svg" alt="Marketing Online" />
                                    </div>
                                </div>
                                <div class="card-content text-center">
                                    <h5 class="mb-3">Marketing Online</h5>
                                    <span>
                                        Quảng bá doanh nghiệp hàng tháng trên Internet để tiếp cận khách hàng đang tìm
                                        kiếm sản phẩm, dịch vụ của bạn
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="/quan-tri-website-tai-da-nang/">
                            <div class="card-item pointer h-100">
                                <div class="d-flex justify-content-center">
                                    <div class="card-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/manage.svg" alt="Quản trị Website" />
                                    </div>
                                </div>
                                <div class="card-content text-center">
                                    <h5 class="mb-3">Quản trị Website</h5>
                                    <span>
                                        Đảm bảo việc chăm sóc, quản trị Website được thực hiện thường xuyên giúp Website
                                        hoạt động một cách hiệu quả nhất.
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section Service end -->

<!-- Section Service start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="px-md-4 px-lg-5">
            <div class="mx-auto text-center">
                <h2 class="mb-5 section-heading">Dịch vụ quản trị website tại Đà Nẵng </h2>
            </div>
            <div class="row g-5">

            </div>
        </div>
    </div>
</div>
<!-- Section Service end -->


<?php
get_footer(); //displays footer

// genesis();
