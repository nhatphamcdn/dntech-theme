<div class="container-xxl">
    <div class="container">
        <div class="px-md-4 px-lg-5 py-3 py-md-4">
            <div class="breadcrumb-wrap">
                <?php genesis_breadcrumb([
                    'home'      => 'Trang chủ',
                    'prefix'    => '<div class="breadcrumb border-0 m-0">',
                    'sep'       => '<img src="'.get_stylesheet_directory_uri().'/assets/img/single-arrow.svg" />',
                    'heirarchial_attachments' => true,
                    'heirarchial_categories'  => true,
                    'labels' => array(
                        'prefix'    => __( ' ', 'genesis' ),
                        'author'    => __( '', 'genesis' ),
                        'category'  => __( '', 'genesis' ),
                        'tag'       => __( '', 'genesis' ),
                        'date'      => __( '', 'genesis' ),
                        'search'    => __( 'Search for ', 'genesis' ),
                        'tax'       => __( '', 'genesis' ),
                        'post_type' => __( '', 'genesis' ),
                        '404'       => __( 'Not found: ', 'genesis' )
                    )
                ]); ?>
            </div>
        </div>
    </div>
</div>