<?php get_header(); ?>
<!-- end div opened in header so that each header image can be set by page -->
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1>I AM SOURCING THROUGH THE PAGE PAGE</h1>
<h6><?php the_title(); ?></h6>
        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
