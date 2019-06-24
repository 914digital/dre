<?php get_template_part('parts/header'); 

/* Template Name: Browse By Type */

?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="page-banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></div>

<div class="page-wrapper prop-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-cont">
                    <h1><?php the_title(); ?></h1>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                        <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>		
                    <div class="property-links">
                        <div class="row">
                            <?php if( have_rows('property_categories') ): ?>
                            <?php $i = 0; ?>
                            <?php while ( have_rows('property_categories') ) : the_row(); ?>
                            <?php $i++; ?>
                            <?php if($i < 4) { ?>
                                <div id="prop-<?php echo $i; ?>" class="col-md-4 mb-4">
                                    <a href="<?php the_sub_field('property_category_link'); ?>">
                                        <img src="<?php the_sub_field('property_category_image'); ?>" alt="<?php the_sub_field('property_category_name'); ?>">
                                    </a>
                                </div>

                                <?php } else { ?>

                                    <div id="prop-<?php echo $i; ?>" class="col-md-3 mb-4">
                                        <a href="<?php the_sub_field('property_category_link'); ?>">
                                            <img src="<?php the_sub_field('property_category_image'); ?>" alt="<?php the_sub_field('property_category_name'); ?>">
                                        </a>
                                    </div>
                                <?php } ?>
                            <?php endwhile;
                                else :
                            // no rows found
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>