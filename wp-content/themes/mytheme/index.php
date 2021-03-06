<!DOCTYPE html>
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
  </header>
  <section class="posts">
    <ul>

      <?php if (have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

          <li class="blogpost">

            <div class="image-container">
              <?php the_post_thumbnail() ?>
            </div>

            <div class="copy">
              <h2><?php the_title(); ?></h2>
              <p>Published on: <?php the_time('F j, Y'); ?></p>
              <p><?php the_excerpt(); ?></p>
            </div>

          </li>

        <?php endwhile ; ?>
      <?php endif; ?>
      
    </ul>
  </section>
  <?php wp_footer(); ?>
</body>
</html>


