<?php get_template_part('parts/header'); 

/* Template Name: Properties Page */

?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="page-banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></div>

<div class="page-wrapper prop-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-cont">
                    <h1><?php the_title(); ?></h1>
                    <div class="property-links">
                        <div class="row">
                            <?php if( have_rows('properties_links') ): ?>
                            <?php while ( have_rows('properties_links') ) : the_row(); ?>
                                <div class="col-md-4 mb-4">
                                    <a href="<?php the_sub_field('property_page_link_address'); ?>">
                                        <img src="<?php the_sub_field('property_page_link_image'); ?>" alt="<?php the_sub_field('property_page_link_name'); ?>">
                                    </a>
                                </div>
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