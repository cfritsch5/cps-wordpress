<?php get_header(); ?>
<!-- end div opened in header so that each header image can be set by page -->
</div>
<h1>I AM DEFINIANTLY IN THE PROJECTS PHP PAGE</h1>
<div class="prjects">
<?php
$args =  array(
	'post_type' => 'project',
	'orderby' => 'menu_order',
	'order' => 'ASC'
);

$custom_query = new WP_Query( $args );
while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
  <div class="project">
    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>

    <?php the_content(); ?>
  </div>
<?php
endwhile;
?>
</div>
<?php  get_footer(); ?>
