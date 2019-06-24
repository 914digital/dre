<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" />
   <link rel='dns-prefetch' href='//maps.googleapis.com' />
   <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
  <?php wp_head(); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-29724133-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

  gtag('config', 'UA-29724133-1');

</script>

<!-- Start of HubSpot Embed Code -->

<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5653313.js"></script>

<!-- End of HubSpot Embed Code -->

</head>

<body <?php body_class(); ?>>
  <div class="top-nav">
    <div class="container">
      <div class="top-nav-menu justify-content-end">
        <?php wp_nav_menu( array( 'theme_location' => 'upper-bar' ) ); ?>
        <div class="social"><a target="_blank" href="https://www.linkedin.com/company/the-davis-companies_2/"><i class="fab fa-linkedin-in"></i></a></div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
          <img src="<?php bloginfo('template_directory') ?>/img/davis_logo.svg" alt="The Davis Companies">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse collapsed justify-content-end" id="navbarNavDropdown">
        <?php				
            $args = array(
              'theme_location' => 'lower-bar',
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