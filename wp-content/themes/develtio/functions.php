<?php
class Theme {
  public function __construct() {
    add_action('wp_enqueue_scripts', array($this, 'cut2code_files'));
    add_action('acf/init', array($this, 'my_acf_blocks_init') );
  }
  function cut2code_files() {
    wp_enqueue_style('botstrapCSS', get_theme_file_uri('/inc/bootstrap-5.1.1-dist/css/bootstrap.min.css'));
    wp_enqueue_style('style_main', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_script('bootstrapJS', get_theme_file_uri('/inc/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('mobile_menuJS', get_theme_file_uri('/js/mobile_menu.js'),array('jquery'), 1.0, true);
  }
  function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
      
          // Register a One block.
          acf_register_block_type(array(
              'name'              => 'section_1_header',
              'title'             => __('section_1_header'),
              'description'       => __('A custom section_1_header block.'),
              'render_template'   => 'template-parts/blocks/section_1_header.php',
              'category'          => 'formatting',
              'enqueue_style'		=> get_stylesheet_directory_uri() . '/css/style.css'
          ));

          acf_register_block_type(array(
            'name'              => 'section_2_about',
            'title'             => __('section_2_about'),
            'description'       => __('A custom section_2_about block.'),
            'render_template'   => 'template-parts/blocks/section_2_about.php',
            'category'          => 'formatting',
            'enqueue_style'		=> get_stylesheet_directory_uri() . '/css/style.css'
        ));    
    }
  }
}

$template = new Theme();



require_once get_template_directory() . '/inc/customizer.php';