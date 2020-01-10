<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <title>Open Light – WordPress theme </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>  


<header id="global-header">
    <nav class="menu-button-container">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
</header>