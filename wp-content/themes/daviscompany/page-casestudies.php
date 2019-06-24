<?php get_template_part('parts/header'); 

/* Template Name: Case Studies */

?>

<div class="page-wrapper prop-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="pc-sidebar">
                    <div class="sb-header">Properties</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'prop-case-sidebar' ) ); ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="page-cont">
                    <h1>Case Studies</h1>
                    <div class="loop-block">
                        <div class="row">
                        <?php // WP_Query arguments
                            $args = array (
                            'post_type' => array( 'properties' ),
                            'posts_per_page' => '-1',
                            'tax_query' => array(
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array('case-studies')
                                            )
                                )
                            );

                            // The Query
                            $cspquery = new WP_Query( $args );

                            // The Loop
                            if ( $cspquery->have_posts() ) {
                            while ( $cspquery->have_posts() ) {
                            $cspquery->the_post(); ?>
                            <div class="col-md-4 mb-4">
                                <div class="fp-post">
                                    <div class="fp-image-wrapper">
                                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                        <a href="<?php the_permalink(); ?>" class="fp-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></a>
                                    </div>
                                    <div class="fp-post-header-wrapper">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <h4><?php the_field('property_city_state'); ?></h4>
                                    </div>
                                </div>
                            </div>
            
                            <?php }
                            } else {
                            // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata(); ?>

                        <!-- loop case studies -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>