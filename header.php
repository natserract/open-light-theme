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

    <div class="search-button">
        <span class="fa fa-search"></span>

        <div class="search-form-container">
          <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
              <label>
                  <input type="search" class="search-field"
                      required
                      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                      value="<?php echo get_search_query() ?>" name="s"
                      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
              </label>
              <input type="submit" class="search-submit"
              value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
          </form>
        </div>
    </div>
</header>