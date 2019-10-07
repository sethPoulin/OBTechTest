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
    <?php $custom_query = new WP_Query('post_type=page&posts_per_page=1'); // show pages only
      while($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <div class="wrapper">
          <h1><?php bloginfo ('name'); ?></h1>
        </div>
        <?php the_post_thumbnail('full') ?>

      <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
  </header>
  <section class="page-copy">
    <!-- <div class="wrapper"> -->
      <?php $custom_query = new WP_Query('post_type=page&posts_per_page=1'); // show pages only
        while($custom_query->have_posts()) : $custom_query->the_post(); ?>
  
            <div class="copy">
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
  
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>
    <!-- </div> -->

  </section>
  <section class="posts">
    <ul>

      <?php $custom_query = new WP_Query('posts_per_page=3'); // limit to 3 posts
        while($custom_query->have_posts()) : $custom_query->the_post(); ?>

          <li class="blogpost">

            <div class="image-container">
              <?php the_post_thumbnail() ?>
            </div>

            <div class="copy">
              <div class="title-date-post">
                <h2><?php the_title(); ?></h2>
                <p>Published on: <?php the_time('F j, Y'); ?></p>
                <?php the_excerpt(); ?>
              </div>
              <div class="tags">
                <h3><?php the_tags(); ?></h3>
              </div>
            </div>

          </li>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>

    </ul>





      <!-- <?php if (have_posts()) : ?>
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
      <?php endif; ?> -->
      
    </ul>
  </section>
  <?php wp_footer(); ?>
  <footer>
    <div class="wrapper">
      <?php $blog_info = get_bloginfo('description'); ?>
      <h4><?php echo $blog_info; ?></h4>
      <?php the_custom_logo(); ?>
    </div>
  </footer>
</body>
</html>


