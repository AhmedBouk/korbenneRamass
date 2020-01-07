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
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?> /inc/js/sound.js"></script>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>
 
	<?php wp_head(); ?>
</head>

<div id="page" class="site">

	<header id="masthead" class="site-header">

		<nav class="navbar navbar-expand-md navbar-dark">
			<audio id="audio">
				<source src="<?php echo get_template_directory_uri(); ?>/klaxon-SF.mp3">
			</audio>
			<a class="navbar-brand logo" onmouseover="play();" href="<?php echo esc_url(home_url('/'));?>">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?> /assets/img/Korbenne-ramass.png" width="300" height="150">
			</a>
			<a class="nav-item nav-link navlink" href="<?php echo esc_url(home_url('/'));?>">ACCUEIL <span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link navlink" href="<?php echo esc_url(home_url('Blog'));?>">BLOG</a>
			<div class="dropdown navbar-collapse collapse w-100 order-3 dual-collapse2">
				<a class="nav-item nav-link dropdown-toggle navlink" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ME CONNECTER</a>
					<div class="nav-item dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="#" class="dropDownLink dropdown-item" data-toggle="modal" data-target="#logInModal">CONNEXION</a>
							<div class="dropdown-divider"></div>
						<a href="#" class="dropDownLink dropdown-item" data-toggle="modal" data-target="#signUpModal">DECONNEXION</a>
					</div>
			</div>
		</nav>

		<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Log In</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Log In</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#signUpModal">Create account</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces or special characters.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Sign Up</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#logInModal">Log In</button>
					</div>
				</div>
			</div>
		</div>
		
	</header>
</div>

