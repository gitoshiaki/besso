<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
			<?php if ( is_front_page() && is_home() ) : ?>
				<title><?= 'HOME｜'.get_bloginfo('name'); ?></title>
				<?php else : ?>
				<title><?php wp_title(); ?></title>
			<?php endif; ?>
      <meta name="description" content="<?php bloginfo( 'description' ); ?>">
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <meta name="viewport" content="width=500,initial-scale=1">
      <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <link href="https://fonts.googleapis.com/css?family=Roboto:100i" rel="stylesheet">
      <!-- <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet" /> -->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <?php wp_head(); ?>
  </head>
