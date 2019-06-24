<div class="home-page-banner">
    <div id="carouselHome" class="carousel slide carousel-fade" data-ride="carousel">
        
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            <?php if( have_rows('home_page_carousel') ): ?>
                <?php $counter = -1; ?>
            <?php while ( have_rows('home_page_carousel') ) : the_row(); ?>
                <?php $counter++; ?>
                <li data-target="#carouselHome" data-slide-to="<?php echo $counter; ?>"></li>
            <?php endwhile;
                else :
            // no rows found
            endif; ?>
        </ol>

        <!-- Main Carousel Loop -->
        <div class="carousel-inner">
        <?php if( have_rows('home_page_carousel') ): ?>
            <?php while ( have_rows('home_page_carousel') ) : the_row(); ?>
            <div class="carousel-item" style="background-image:url('<?php the_sub_field('image'); ?>');">
                <div class="inner-text <?php the_sub_field('align_text'); ?>">
                    <h1><?php the_sub_field('image_text'); ?></h1>
                </div>
            </div>
            <?php endwhile;
                else :
            // no rows found
            endif; ?>
        </div>

        <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>