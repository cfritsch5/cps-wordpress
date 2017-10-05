<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head();?>
  </head>
  <body>
      <nav class="nav">
        <?php wp_list_pages( '&title_li=',"menu_order" ); ?>
      </nav>
      <div class="title-header">
      <a href="<?php echo get_bloginfo('wpurl');?>">
        <h1>
          <?php
          $name = get_bloginfo('name');
          echo wordwrap($name, 1, "<br />\n", false);
          ?>
        </h1>
      </a>
