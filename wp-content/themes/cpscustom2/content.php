<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
  <h1>I AM DEFINIANTLY IN THE content PHP PAGE</h1>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php the_title(); ?></h1>
          <div class="entry">
              <?php the_content(); ?>
          </div><!-- entry -->
  <?php endwhile; ?>
  <?php endif; ?>
</div><!-- /.blog-post -->
