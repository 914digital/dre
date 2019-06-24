<?php get_template_part('parts/header'); 

/* Template Name: About */

?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="page-banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></div>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="pc-sidebar">
                    <div class="sb-header">About Us</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'about-sidebar' ) ); ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="page-cont">
                    <?php if(is_page(9)) { ?>
                        <h1>INTEGRATED REAL ESTATE INVESTMENT, DEVELOPMENT AND MANAGEMENT</h1>
                    <?php } else { ?>
                        <h1><?php the_title(); ?></h1>
                    <?php } ?> 
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                            <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>	

                    <?php if(is_page(49)) { ?>
                        <?php if(get_field('careers')) : ?>
                            <h2>Current Openings:</h2>
                        <?php endif; ?>
                        <?php if( have_rows('careers') ): ?>
                        <?php while ( have_rows('careers') ) : the_row(); ?>
                            <div class="listing">
                                <a target="_blank" href="<?php the_sub_field('upload_opening'); ?>"><?php the_sub_field('opening'); ?></a>
                            </div>
                        <?php endwhile;
                        else :
                        // no rows found
                        endif; ?>

                    <?php } elseif (is_page(45)) { ?>
                            
                        <div class="gallery">
                            <div class="row">
                            
                    <?php if( have_rows('gallery') ): ?>
                    <?php while ( have_rows('gallery') ) : the_row(); ?>

                        <div class="col-md-4 p-1">
                            <a href="<?php the_sub_field('gallery_image'); ?>"><img class="fancybox" src="<?php the_sub_field('gallery_image'); ?>" alt=""></a>
                        </div>

                    <?php endwhile;
                        else :
                    // no rows found
                    endif; ?>

                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>