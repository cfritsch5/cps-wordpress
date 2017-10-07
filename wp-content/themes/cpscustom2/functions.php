<?php
function wpb_adding_scripts() {
  wp_register_script('bundle',get_template_directory_uri(),'/bundle.js',array(),NULL,false);
  wp_enqueue_script('bundle');

}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'email', 'Contact Email', 'setting_email', 'theme-options', 'section' );

  register_setting('section', 'email');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

function setting_email() { ?>
  <input type="text" name="email" id="email" value="<?php echo get_option( 'email' ); ?>" />
<?php }

// custom post stuff __________________________

 function create_project() {
	register_post_type( 'project',
			array(
			'labels' => array(
					'name' => __( 'Projects' ),
					'singular_name' => __( 'project' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action( 'init', 'create_project' );

add_filter('show_admin_bar', '__return_false');


function remove_menus(){

  // remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments

}
add_action( 'admin_menu', 'remove_menus' );
