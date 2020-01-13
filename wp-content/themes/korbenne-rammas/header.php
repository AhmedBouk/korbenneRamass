<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KORBENNE_RAMMAS\'
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?> /style.css">
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css' type='text/css' />    
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?> /inc/js/sound.js"></script>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>
	<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
	<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
type="text/css"
/>
 
	<?php wp_head(); ?>
</head>

<div id="page" class="site">

	<header id="masthead" class="site-header">

		<nav class="navbar navbar-expand-md navbar-dark">
			<audio id="audio">
				<source src="<?php echo get_template_directory_uri(); ?>/klaxon-SF.mp3">
			</audio>

                <img class="logo" onmouseover="play();" src="<?php echo get_template_directory_uri(); ?> /assets/img/Korbenne-ramass.png" width="260" height="130" onclick="displaySidebar()">
                <a class="nav-item nav-link navlink" href="<?php echo esc_url(home_url('/'));?>">ACCUEIL <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link navlink" href="<?php echo esc_url(home_url('Blog'));?>">BLOG</a>
                <div class="dropdown ml-md-auto">
                <a class="nav-item nav-link dropdown-toggle navlink" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ME CONNECTER</a>
                <div class="nav-item dropdown-menu dropDown" aria-labelledby="navbarDropdown">
                    <a href="<?php echo esc_url(home_url('login'));?>" class="dropDownLink dropdown-item" >CONNEXION</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo esc_url(home_url('signup'));?>" class="dropDownLink dropdown-item">INSCRIPTION</a>
                </div>
            </div>

        </nav>
	</header>
</div>