<?php get_template_part('parts/header'); 

/* Template Name: Team */

?>

<div class="team-wrapper">
    <div class="team-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="pc-sidebar">
                        <div class="sb-header">About Us</div>
                        <?php wp_nav_menu( array( 'theme_location' => 'about-sidebar' ) ); ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="team-page-content">
                        <?php the_content(); ?>
                    </div>
                    <?php get_template_part('content', 'executive'); ?>
                    <?php get_template_part('content', 'investment'); ?>
                    <?php get_template_part('content', 'development'); ?>
                    <?php get_template_part('content', 'finance'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>