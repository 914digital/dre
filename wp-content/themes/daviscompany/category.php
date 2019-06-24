<?php get_template_part('parts/header'); ?>
<div class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php single_cat_title(); ?></h1>
            </div>
        </div>
        <div class="row">
        <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'posts_per_page' => 9,
                'paged'          => $paged
            );
            
            $cat_query = new WP_Query( $args ); 

            // The Loop
            if ( $cat_query->have_posts() ) {
            while ( $cat_query->have_posts() ) {
            $cat_query->the_post(); ?>
        
            
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
            
            <?php }
            } else {
            // no posts found
            }

            // Restore original Post Data
            wp_reset_postdata(); ?>
             <div class="numeric-nav">
                <?php wp_numeric_posts_nav(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('parts/footer'); ?>
