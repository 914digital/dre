<?php get_template_part('parts/header'); 

/* Template Name: Contact Us */

?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="page-banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></div>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="page-cont">
                    <h1><?php the_title(); ?></h1>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>

                    <script>
                    hbspt.forms.create({
                        portalId: "5653313",
                        formId: "b2d9e476-b0d9-4a8d-8650-a5b9cbbd15c8"
                    });
                    </script>
                </div>
            </div>
            <div class="col-md-3">
                <div class="loc-sidebar">
                    <?php if( have_rows('location') ): ?>
                    <?php while ( have_rows('location') ) : the_row(); ?>

                        <div class="single-location">
                            <h2><?php the_sub_field('city_state'); ?></h2>
                            <p>
                                <?php the_sub_field('street_address'); ?><br>
                                <?php the_sub_field('city_state'); ?> <?php the_sub_field('zip_code'); ?>
                                <?php if(get_sub_field('telephone_number')) : ?><br>TEL: <?php the_sub_field('telephone_number'); ?><?php endif; ?>
                                <?php if(get_sub_field('fax_number')) : ?><br>FAX: <?php the_sub_field('fax_number'); ?><?php endif; ?>
                            </p>
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

<?php get_template_part('parts/footer'); ?>