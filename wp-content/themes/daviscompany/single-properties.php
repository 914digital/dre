<?php get_template_part('parts/header'); ?>

<div class="page-wrapper">
    <div class="container">
    <?php if(has_term('case-studies','propertytype')) { ?>
        <div class="row">
            <div class="col-md-3">
                <div class="pc-sidebar">
                    <div class="sb-header">Properties</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'prop-case-sidebar' ) ); ?>
                </div>
            </div>
            <div class="col-md-9">
            <?php get_template_part ( 'content', 'propslider' ); ?>
            <div class="page-cont single-prop-content">
                <h1><?php the_title(); ?></h1>
                <div class="prop-city"><?php the_field('property_city_state'); ?></div>
                <div class="prop-meta">
                    <?php if(get_field('square_footage')) { ?>
                        <span class="sq-ft">SF: <?php the_field('square_footage'); ?></span>  
                    <?php } ?>
                    <?php if(get_field('units')) { ?>
                        <span class="units"><?php the_field('units'); ?> Units</span>  
                    <?php } ?>
                    <?php if(get_field('fund')) { ?>
                        <span class="fund"> &#183; Fund <?php the_field('fund'); ?> </span>  
                    <?php } ?>
                    <?php if(get_field('year_sold')) { ?>
                        <span class="year-sold"> &#183; Sold <?php the_field('year_sold'); ?> </span>  
                    <?php } ?>
                </div>
                    <?php if(get_field('opportunity')) { ?>
                        <h2>Opportunity</h2>
                        <div class="cs-text">
                            <?php the_field('opportunity'); ?>
                        </div>
                    <?php } ?>
                    <?php if(get_field('overview')) { ?>
                        <h2>Overview</h2>
                        <div class="cs-text">
                            <?php the_field('overview'); ?>
                        </div>
                    <?php } ?>
                    <?php if(get_field('value_creation_strategy')) { ?>
                        <h2>Value Creation Strategy</h2>
                        <div class="cs-text">
                            <?php the_field('value_creation_strategy'); ?>
                        </div>
                    <?php } ?>
                        <?php if(get_field('related_posts')) { ?>
                            <h2><?php the_title(); ?> News</h2>
                            <div class="row">
                            <?php if( have_rows('related_posts') ): ?>
                            <?php while ( have_rows('related_posts') ) : the_row(); ?>
                                <?php

                                $post_object = get_sub_field('related_post_item');

                                if( $post_object ): 

                                    // override $post
                                    $post = $post_object;
                                    setup_postdata( $post ); 

                                    ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="fp-post">
                                            <div class="fp-image-wrapper">
                                                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                                <a href="<?php the_permalink(); ?>" class="fp-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></a>
                                            </div>
                                            <div class="fp-post-header-wrapper">
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>
                            <?php endwhile;
                            else :
                        // no rows found
                        endif; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } else { ?>
            <div class="page-cont">
                <div class="row">
                    <div class="col-md-6">
                        <h1><?php the_title(); ?></h1>
                        <div class="prop-city"><?php the_field('property_city_state'); ?></div>
                        <div class="prop-feat-thumb">
                            <?php echo the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prop-meta prop-item-ncs">
                            <?php if(get_field('square_footage')) { ?>
                                <span class="sq-ft">SF: <?php the_field('square_footage'); ?></span>  
                            <?php } ?>
                            <?php if(get_field('units')) { ?>
                                <span class="units">Units: <?php the_field('units'); ?></span>  
                            <?php } ?>
                            <?php if(get_field('fund')) { ?>
                                <span class="fund"> Fund <?php the_field('fund'); ?> </span>  
                            <?php } ?>
                            <?php if(get_field('client')) { ?>
                                <span class="client"> Client <?php the_field('fund'); ?> </span>  
                            <?php } ?>
                            <?php if(get_field('year_sold')) { ?>
                                <span class="year-sold"> Sold <?php the_field('year_sold'); ?> </span>  
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>