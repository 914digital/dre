<div class="single-post-sidebar">
    <div class="sps-title">
        Recent News
    </div>
    <div class="recent-news-feed">
        <?php // WP_Query arguments
        $args = array (
        'post_type' => array( 'post' ),
        'posts_per_page' => '5',
        'post__not_in' => array( $post->ID )
        );

        // The Query
        $rnquery = new WP_Query( $args );

        // The Loop
        if ( $rnquery->have_posts() ) {
        while ( $rnquery->have_posts() ) {
        $rnquery->the_post(); ?>
        <div class="recent-news-feed-post">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <div class="meta-date">
                <time datetime="<?php the_time('d-m-Y')?>"><?php the_time('F jS, Y') ?></time>
            </div>
        </div>
        
        <?php }
        } else {
        // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata(); ?>
    </div>
    <div class="categories-list">
        <div class="sps-title">
            Categories
        </div>
        <?php $categories = get_categories( array(
            'orderby' => 'name',
            'parent'  => $cat_id
            ) );
        
        foreach ( $categories as $category ) {
            printf( '<a href="%1$s">%2$s</a>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_html( $category->name )
                );
            } 
        ?>
    </div>
</div>