<!-- <?php
  get_header();
  get_template_part( 'content', get_post_format());
  get_footer();
  ?> -->
  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
    // wp_register_script('bundle',get_template_directory_uri(),'/bundle.js',array(),NULL,false);
    // wp_enqueue_script('test');
    ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bundle.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
    <title><?php echo get_bloginfo( 'name' ); ?>
</title>
  </head>
  <body>
    <div>
      <?php
        // $pages = get_pages( $args );
        // foreach ($pages as $page){
        //   echo $page->{'post_title'};
        // }
        // print_r($pages);
      ?>
    </div>
    <div id="root"><h1>shows if broken</h1></div>
  </body>
</html>
