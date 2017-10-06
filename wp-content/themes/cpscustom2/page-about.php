<?php get_header(); ?>
<!-- end div opened in header so that each header image can be set by page -->
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1>IN about PHP page</h1>
<?php the_title(); ?></h1>
        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>
<?php  get_footer(); ?>
