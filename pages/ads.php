<?php

/**
 * Template Name: Da Nang Tech Hosting
 *
 * @package Genesis\Templates
 */

get_header(); // displays header

// This file handles pages, but only exists for the sake of child theme forward compatibility.// Removes breadcrumbs.
get_template_part('template-parts/head-banner');
get_template_part('template-parts/breadcrumb');

?>
<div class="container-xxl subpage mt-4 pt-4">
    <div class="container">
        <div class="px-md-4 pb-5 px-lg-5">
            <div class="row gx-5">
                <div class="col-md-4 pe-md-4">
                    <div class="mx-auto text-left">
                        <div class="d-inline-block text-primary mb-2">LIÊN HỆ CHÚNG TÔI</div>
                        <h2 class="mb-4 section-heading-sm">Bạn có câu hỏi? Liên hệ ngay!</h2>
                    </div>
                    <div class="pe-md-5">
                        <?php get_template_part('template-parts/contact-info'); ?>
                    </div>
                </div>
                <div class="col-md-7 ps-md-5">
                    <div class="main-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="maps">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/map.png" alt="Liên hệ">
</div>
<?php
get_footer(); //displays footer

// genesis();
