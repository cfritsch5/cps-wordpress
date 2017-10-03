<?php
function wpb_adding_scripts() {
  wp_register_script('bundle',get_template_directory_uri(),'/bundle.js',array(),NULL,false);
  wp_enqueue_script('bundle');

}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
 ?>
