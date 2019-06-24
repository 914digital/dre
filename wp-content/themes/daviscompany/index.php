<?php get_template_part('parts/header'); ?>

<div class="page-banner news-banner"></div>

<div class="news-index">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="pc-sidebar">
                    <div class="sb-header">About Us</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'about-sidebar' ) ); ?>
                </div>
            </div>
            <div class="col-md-4">
                <h1>In the News</h1>
                <?php // WP_Query arguments
                    $args = array (
                    'post_type' => array( 'post' ),
                    'category_name' => 'news',
                    'posts_per_page' => '-1'
                    );

                    // The Query
                    $nlquery = new WP_Query( $args );

                    // The Loop
                    if ( $nlquery->have_posts() ) {
                    while ( $nlquery->have_posts() ) {
                    $nlquery->the_post(); ?>
                    
                    <h2 class="news-index-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <?php }
                    } else {
                    // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata(); ?>
            </div>
            <div class="col-md-5">
                <h1>Press Releases</h1>
                <?php // WP_Query arguments
                    $args = array (
                    'post_type' => array( 'post' ),
                    'category_name' => 'press',
                    'posts_per_page' => '-1'
                    );

                    // The Query
                    $prquery = new WP_Query( $args );

                    // The Loop
                    if ( $prquery->have_posts() ) {
                    while ( $prquery->have_posts() ) {
                    $prquery->the_post(); ?>
                    
                    <h2 class="news-index-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <?php }
                    } else {
                    // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>