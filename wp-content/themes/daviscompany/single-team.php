<?php get_template_part('parts/header'); ?>

<div class="single-team-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="pc-sidebar">
                    <div class="sb-header">About Us</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'team-sidebar' ) ); ?>
                </div>
            </div>
            <div class="col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <div class="single-team-member clearfix">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('interior_title'); ?></h2>
                    <div class="single-team-thumb">
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class="single-team-content">
                    <?php the_content(); ?>
                    <!--<a href="<?php the_field('vcard'); ?>" class="btn st-btn"><i class="fas fa-download"></i> Download vCard</a>-->
                    </div>
                </div>
                
            <?php endwhile; else : ?>
	        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>		
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>