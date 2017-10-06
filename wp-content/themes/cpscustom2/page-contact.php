<?php get_header(); ?>
<!-- end div opened in header so that each header image can be set by page -->
</div>
<?php the_content(); ?>
<h1>I AM DEFINIANTLY IN THE Contact PHP PAGE</h1>
<div>
  <form method="post" name="myemailform">
    <label>
      Name: <input type="text" name="name">
    </label>
    <label>
      Email Address:    <input type="text" name="email">
    </label>
    <label>
      Message:  <textarea name="message"></textarea>
    </label>
  <input type="submit" value="Send Form">
  </form>

</div>
<?php  get_footer(); ?>
