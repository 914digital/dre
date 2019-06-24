<div class="team-block">
    <div class="row">
        <div class="col-md-12">
        <h2>Executive Team</h2>
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
                'terms' => 'executive-team'
            )
        )
        
        );

        // The Query
        $exquery = new WP_Query( $args );

        // The Loop
        if ( $exquery->have_posts() ) {
        while ( $exquery->have_posts() ) {
        $exquery->the_post(); ?>
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