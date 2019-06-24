<?php get_template_part('parts/header'); ?>

<div class="single-post-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="single-post">
                    <h1><?php the_title(); ?></h1>
                    <div class="single-post-feature-image">
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class="single-post-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php get_template_part ( 'content', 'single-sidebar' ); ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/footer'); ?>