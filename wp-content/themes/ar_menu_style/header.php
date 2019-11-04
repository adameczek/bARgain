<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ar_menu_style
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
    crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ar_menu_style' ); ?></a>

	<nav class="navbar navbar-expand-md  navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="http://b-ar-gain-com.stackstaging.com"><?php bloginfo('name');?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<?php 
			wp_nav_menu( array(
				'container' => 'false',
				'menu_class' => 'navbar-nav mr-auto'
				
			) );
		?>
      <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#mainScreen">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#about">O projekcie
            </a>
          </li>
      </ul> -->
      <div class="my-2">
        <?php if (is_user_logged_in() ) {
  		global $current_user;
  		get_currentuserinfo();
  		echo "<span class='navbar-brand'>Witaj ".$current_user->user_login."!</span>";
		} else {
  			echo "<button id='loginBtn' type='button' class='btn btn-sm btn-outline-primary'>Zaloguj się</button>";
  			echo "<button id='registerBtn' type='button' class='btn btn-sm btn-outline-primary'>Zarejestruj się</button>";
		}
        
        ?>
        <!-- <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#kontaktModal">Kontakt</button> -->
        

      </div>
    </div>
  </nav>