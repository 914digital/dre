<?php

function bst_enqueues()
{
		wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null);
		wp_enqueue_style('bootstrap-css');

  	wp_register_style('bst-css', get_template_directory_uri() . '/css/bst.css', false, null);
		wp_enqueue_style('bst-css');
		
		wp_register_style('style-css', get_template_directory_uri() . '/style.css', false, rand(), null);
		wp_enqueue_style('style-css');
		
		wp_register_style('animate-css', get_template_directory_uri() . '/css/animate.min.css', false, null);
		wp_enqueue_style('animate-css');
		
		wp_register_style('font-awesome-css', get_template_directory_uri() . '/fonts/css/all.css', false, null);
        wp_enqueue_style('font-awesome-css');
        
    wp_register_script('jq', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', false, null, true);
    wp_enqueue_script('jq');

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', false, null, true);
    wp_enqueue_script('modernizr');

		wp_register_script('html5shiv.js', get_template_directory_uri() . '/js/html5shiv.js', false, null, true);
    wp_enqueue_script('html5shiv.js');

  	wp_register_script('respond', get_template_directory_uri() . '/js/respond.min.js', false, null, true);
    wp_enqueue_script('respond');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', false, null, true);
    wp_enqueue_script('bootstrap-js');

    wp_register_script('bst-js', get_template_directory_uri() . '/js/bst.js', false, null, true);
		wp_enqueue_script('bst-js');
		
    

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
      }
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);

?>