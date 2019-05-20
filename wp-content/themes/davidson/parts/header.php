<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.png" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg fixed">
			<div class="container">
				<a class="navbar-brand" href="<?php echo site_url(); ?>">
				<h1>LOGO</h1>
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php				
            $args = array(
              'theme_location' => 'upper-bar',
              'depth' => 0,
              'container'	=> false,
              'fallback_cb' => false,
              'menu_class' => 'nav navbar-nav',
              'walker' => new WP_Bootstrap_Navwalker()
            );
            wp_nav_menu($args);
        ?>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>