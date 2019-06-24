<?php get_template_part('parts/header'); 

/* Template Name: Map */

?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<a href="/browse-by-type" class="page-banner map" style="background-image: url('<?php echo $backgroundImg[0]; ?>') "></a>


<?php get_template_part('parts/footer'); ?>