  <?php
  
  function load_stylesheets()
  {
    wp_register_style('stylesheet' , get_template_directory_uri() . '/assets/css/main.css', array(), 1, "all");
    wp_enqueue_style('stylesheet');

    wp_register_style('bootstrap' , get_template_directory_uri() . '/assets/css/theme.css', array(), 1, "all");
    wp_enqueue_style('bootstrap');


    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version'),
    );

  }

  add_action('wp_enqueue_scripts', 'load_stylesheets');


  function addjs()
  {

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/main.js', array() , 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/theme.js', array() , 1, 1, 1);
    wp_enqueue_script('jquery');

  }

add_action('after_setup_theme', function(){

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', true);
    add_theme_support('menus'); 
  
    register_nav_menus( array(
        'main-menu' => __('Main Menu'),
    ) );

    register_nav_menus( array(
        'category-menu' => __('Category Menu'),
    ) );
});

  