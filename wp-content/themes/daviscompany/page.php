<?php get_template_part('parts/header'); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="page-banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></div>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>