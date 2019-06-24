<?php get_template_part('parts/header'); 

/* Template Name: History */

?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="page-banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></div>

<div class="page-wrapper hist-cont">
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
                    <h1 class="hist-header"><?php the_title(); ?></h1>
                </div>
                    <?php if( have_rows('history_timeline') ): ?>
                    <?php while ( have_rows('history_timeline') ) : the_row(); ?>
                        <div class="hist-row">
                            <div class="years"><?php the_sub_field('years'); ?></div>
                            <div class="hist-descrip">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="descrip-box">
                                            <?php the_sub_field('description'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="year-points-box">
                                            <?php the_sub_field('yearly_points'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                    else :
                    // no rows found
                    endif; ?>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('parts/footer'); ?>