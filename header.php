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
    <div class="wrap">
    <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-youtube-play"></span></a>
              </div>
              <div class="col-3 search-top">

                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <label>
                      <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                      <input type="search" class="search-field"
                          placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                          value="<?php echo get_search_query() ?>" name="s"
                          title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    </label>
                  <input type="submit" class="search-submit"
                    value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="index.html">Open Light</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarMenu">
              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </div>
          </div>
        </nav>
      </header>
