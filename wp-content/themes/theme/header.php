<!-- inject:partials/header.html -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title><?php bloginfo("name"); ?><?php wp_title(); ?></title>

    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <?php wp_head();?>
    
  </head>

  <body>
<!--------------------------------------
NAVBAR
--------------------------------------->
<?php if ( function_exists( 'wp_nav_menu' ) /*&& has_nav_menu( 'primary_navigation' )*/ )
{ 
    wp_nav_menu( array(
'container'       => 'nav',
'container_class' => 'prova',
'theme_location'  => 'main-menu',
) );
}?>
