<?php get_template_part('parts/header'); ?>
<div class="page-wrapper prop-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="pc-sidebar">
                    <div class="sb-header">Properties</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'prop-sidebar' ) ); ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="page-cont">
                    <h1>
                    <?php single_term_title(); ?>
                    </h1>
                    <?php echo term_description( $term_id, 'propertytype' ) ?>
                    <div class="loop-block">
                    <?php // WP_Query arguments
                         $queried_object = get_queried_object();
                            $slug = $queried_object->slug;
                        
                            $args = array (
                            'post_type' => array( 'properties' ),
                            'posts_per_page' => '1',
                            'tax_query' => array(
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array($slug)
                                    ),
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array('case-studies')
                                            )
                                )
                            );

                            // The Query
                            $csquery = new WP_Query( $args );

                            // The Loop
                            if ( $csquery->have_posts() ) {
                            while ( $csquery->have_posts() ) {
                            $csquery->the_post(); ?>
                            <h2><?php single_term_title(); ?> Case Studies</h2>
                            <?php }
                            } else {
                            // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata(); ?>
                        <div class="row">
                        
                        <?php // WP_Query arguments
                         $queried_object = get_queried_object();
                            $slug = $queried_object->slug;
                        
                            $args = array (
                            'post_type' => array( 'properties' ),
                            'posts_per_page' => '-1',
                            'tax_query' => array(
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array($slug)
                                    ),
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array('case-studies')
                                            )
                                )
                            );

                            // The Query
                            $csquery = new WP_Query( $args );

                            // The Loop
                            if ( $csquery->have_posts() ) {
                            while ( $csquery->have_posts() ) {
                            $csquery->the_post(); ?>
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
                    <div class="loop-block">
                    <?php // WP_Query arguments
                         $queried_object = get_queried_object();
                            $slug = $queried_object->slug;
                        
                            $args = array (
                            'post_type' => array( 'properties' ),
                            'posts_per_page' => '1',
                            'tax_query' => array(
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array($slug)
                                    ),
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array('current')
                                            )
                                )
                            );

                            // The Query
                            $curquery = new WP_Query( $args );

                            // The Loop
                            if ( $curquery->have_posts() ) { ?>
                            <?php while ( $curquery->have_posts() ) { ?>
                            <?php $curquery->the_post(); ?>
                   
                        <h2>Current <?php single_term_title(); ?> Properties</h2>

                        <?php }
                            } else {
                            // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata(); ?>
                   
                        <div class="row">
                        <?php // WP_Query arguments
                         $queried_object = get_queried_object();
                            $slug = $queried_object->slug;
                        
                            $args = array (
                            'post_type' => array( 'properties' ),
                            'posts_per_page' => '-1',
                            'tax_query' => array(
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array($slug)
                                    ),
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array('current')
                                            )
                                )
                            );

                            // The Query
                            $curquery = new WP_Query( $args );

                            // The Loop
                            if ( $curquery->have_posts() ) { ?>
                            <?php $curprop = 0; $curproploc = 0; $curpropmodal = 0; ?>
                            <?php while ( $curquery->have_posts() ) { ?>
                            <?php $curprop++;$curproploc++; $curpropmodal++; ?>
                            <?php $curquery->the_post(); ?>
                            <div class="col-md-4 mb-4">
                                <div class="fp-post">
                                    <div class="fp-image-wrapper">
                                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                        <a data-toggle="modal" data-target="#currentProperty-<?php echo $curprop; ?>" href="<?php the_permalink(); ?>" class="fp-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></a>
                                    </div>
                                    <div class="fp-post-header-wrapper">
                                        <h3><a data-toggle="modal" data-target="#currentProperty-<?php echo $curproploc; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <h4><?php the_field('property_city_state'); ?></h4>
                                    </div>
                                </div>
                            </div>

                            <!-- current properties modal -->

                            <div class="modal fade prop-modal" id="currentProperty-<?php echo $curpropmodal; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-prop-content">
                                                <div class="modal-prop-thumb">
                                                        <?php echo the_post_thumbnail(); ?>
                                                </div>
                                                <div class="modal-prop-meta">
                                                    <div class="modal-prop-name">
                                                        <?php the_title(); ?>
                                                    </div>
                                                    <div class="modal-prop-loc">
                                                        <?php the_field('property_city_state'); ?>
                                                    </div>
                                                    <div class="modal-prop-sf">
                                                        <?php the_field('square_footage'); ?> SF
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <?php }
                            } else {
                            // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata(); ?>
                        <!-- loop current -->
                        </div>
                    </div>
                    <div class="loop-block">
            
                        <?php // WP_Query arguments
                         $queried_object = get_queried_object();
                            $slug = $queried_object->slug;
                        
                            $args = array (
                            'post_type' => array( 'properties' ),
                            'posts_per_page' => '1',
                            'tax_query' => array(
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array($slug)
                                    ),
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array('sold')
                                            )
                                )
                            );

                            // The Query
                            $soldquery = new WP_Query( $args );

                            // The Loop
                            if ( $soldquery->have_posts() ) { ?>
                           
                            <?php while ( $soldquery->have_posts() ) { ?>
                           
                            <?php $soldquery->the_post(); ?>
                        <h2>Sold <?php single_term_title(); ?> Properties
                        </h2>
                        <?php }
                            } else {
                            // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata(); ?>
                        <div class="row">
                        <?php // WP_Query arguments
                         $queried_object = get_queried_object();
                            $slug = $queried_object->slug;
                        
                            $args = array (
                            'post_type' => array( 'properties' ),
                            'posts_per_page' => '1',
                            'tax_query' => array(
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array($slug)
                                    ),
                                    array(
                                'taxonomy' => 'propertytype',
                                'field' => 'slug',
                                'terms' => array('sold')
                                            )
                                )
                            );

                            // The Query
                            $soldquery = new WP_Query( $args );

                            // The Loop
                            if ( $soldquery->have_posts() ) { ?>
                            <?php $soldprop = 0; $soldproploc = 0; $soldpropmodal = 0; ?>
                            <?php while ( $soldquery->have_posts() ) { ?>
                            <?php $soldprop++;$soldproploc++; $soldpropmodal++; ?>
                            <?php $soldquery->the_post(); ?>
                            <div class="col-md-4 mb-4">
                                <div class="fp-post">
                                    <div class="fp-image-wrapper">
                                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                        <a data-toggle="modal" data-target="#soldProperty-<?php echo $soldprop; ?>" href="<?php the_permalink(); ?>" class="fp-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></a>
                                    </div>
                                    <div class="fp-post-header-wrapper">
                                        <h3><a data-toggle="modal" data-target="#soldProperty-<?php echo $soldproploc; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <h4><?php the_field('property_city_state'); ?></h4>
                                    </div>
                                </div>
                            </div>

                            <!-- sold properties modal -->

                            <div class="modal fade prop-modal" id="soldProperty-<?php echo $soldpropmodal; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-prop-content">
                                                <div class="modal-prop-thumb">
                                                        <?php echo the_post_thumbnail(); ?>
                                                </div>
                                                <div class="modal-prop-meta">
                                                    <div class="modal-prop-name">
                                                        <?php the_title(); ?>
                                                    </div>
                                                    <div class="modal-prop-loc">
                                                        <?php the_field('property_city_state'); ?>
                                                    </div>
                                                    <div class="modal-prop-sf">
                                                        <?php the_field('square_footage'); ?> SF
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>