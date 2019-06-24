<div class="prop-slider">
    <div id="carouselprop" class="carousel slide" data-ride="carousel">
        
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            <?php if( have_rows('property_slider') ): ?>
                <?php $counter = -1; ?>
            <?php while ( have_rows('property_slider') ) : the_row(); ?>
                <?php $counter++; ?>
                <li data-target="#carouselprop" data-slide-to="<?php echo $counter; ?>"></li>
            <?php endwhile;
                else :
            // no rows found
            endif; ?>
        </ol>

        <!-- Main Carousel Loop -->
        <div class="carousel-inner">
        <?php if( have_rows('property_slider') ): ?>
            <?php while ( have_rows('property_slider') ) : the_row(); ?>
            <div class="carousel-item" style="background-image:url('<?php the_sub_field('property_slider_image'); ?>');">
            </div>
            <?php endwhile;
                else :
            // no rows found
            endif; ?>
        </div>

        <a class="carousel-control-prev" href="#carouselprop" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselprop" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>