<div class="team-block">
    <div class="row">
        <div class="col-md-12">
        <h2>Senior Finance Team</h2>
        </div>
    </div>
    <div class="row">
    <?php // WP_Query arguments
        $args = array (
        'post_type' => 'team',
        'posts_per_page' => '-1',
        'order'   => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'team-categories',
                'field' => 'slug',
                'terms' => 'senior-finance-team'
            )
        )
        
        );

        // The Query
        $fiquery = new WP_Query( $args );

        // The Loop
        if ( $fiquery->have_posts() ) {
        while ( $fiquery->have_posts() ) {
        $fiquery->the_post(); ?>
        <div class="col-md-4">
            <div class="team-page-single">
            <a href="<?php the_permalink(); ?>" class="team-page-single-thumb" style="background-image: url('<?php the_field('thumb_photo'); ?>') "></a>
                <div class="team-page-single-title">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <h4><?php the_field('title'); ?></h4>
                </div>
            </div>
        </div>
        
        <?php }
        } else {
        // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata(); ?>
    </div>
</div>