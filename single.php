<?php
get_header(); // displays header

// This file handles pages, but only exists for the sake of child theme forward compatibility.// Removes breadcrumbs.
get_template_part('template-parts/head-banner');
get_template_part('template-parts/breadcrumb');

$current_page = max(1, get_query_var('paged'));
$args = array(
    'post_type' => 'post',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => get_query_var('cat'),
        ),
    ),
    'paged'   => $current_page,
    'posts_per_page' => 3,
);

$category_query = new WP_Query($args);

// var_dump($category_query);
?>
<div class="container-xxl">
    <div class="container">
        <div class="px-md-4 px-lg-5">
            <div class="row">
                <div class="col-md-4">
                    <?php get_sidebar('primary-sidebar'); ?>
                </div>
                <div class="col-md-8">
                    <div class="card border-0 mb-5 pb-3">
                        <?php if (get_the_post_thumbnail(get_the_ID()) != '') : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="<?php echo get_the_title(); ?>">
                        <?php endif; ?>
                        <div class="card-body px-0 pb-0">
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
                            <h5 class="card-title mb-2"><?php the_title(); ?></h5>
                        </div>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer(); //displays footer

// genesis();
