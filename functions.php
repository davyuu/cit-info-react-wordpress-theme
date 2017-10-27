<?php
  /* enqueue styles and scripts */
  function jpen_enqueue_assets() {

    wp_enqueue_script( 'script' , get_template_directory_uri() . '/index.js' , array( 'jquery' ) , false , true );

  }
  add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );
?>