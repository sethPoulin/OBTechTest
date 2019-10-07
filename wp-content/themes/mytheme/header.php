<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <section class="page-copy">
 */
?><!doctype html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header>
    <?php $custom_query = new WP_Query('post_type=page&posts_per_page=1'); // show pages only
      while($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <div class="wrapper">
          <h1><?php bloginfo ('name'); ?></h1>
        </div>
        <?php the_post_thumbnail('full') ?>

      <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
  </header>