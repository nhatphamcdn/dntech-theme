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
        <div class="px-4 px-lg-5">
            <div class="row">
                <div class="col-md-4">
                    <?php get_sidebar('primary-sidebar'); ?>
                </div>
                <div class="col-md-8">
                    <div class="main-content">
                        <?php if ($category_query->have_posts()) : ?>
                            <?php while ($category_query->have_posts()) : $category_query->the_post(); ?>

                                <div class="card border-0">
                                    <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
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
                                    <div><?php echo get_the_content(''); ?></div>
                                    <a itemprop="url" href="<?php the_permalink(); ?>" class="card-link">
                                        Xem thêm
                                    </a>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php
                            // $big = 999999999; // need an unlikely integer
                            echo paginate_links(array(
                                'base'         => @add_query_arg('paged','%#%'),
                                'format'       => '',
                                'current'      => max(1, get_query_var('paged')),
                                'total'        => $category_query->max_num_pages,
                            ));
                            ?>
                        <?php else : ?>
                            <p><?php _e('Chưa có bài viết nào cho danh mục này.'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer(); //displays footer

// genesis();
