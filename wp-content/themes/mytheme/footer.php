<?php
/**
 * The template for displaying the footer
 *
 * Contains the footer and all content after.
 */
?>

<footer>
    <div class="wrapper">
      <?php $blog_info = get_bloginfo('description'); ?>
      <h4><?php echo $blog_info; ?></h4>
      <?php the_custom_logo(); ?>
    </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>