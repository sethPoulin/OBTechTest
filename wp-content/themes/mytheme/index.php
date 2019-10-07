<?php
/**
 * The main template file
 */

get_header();
?>
<section class="page-copy">

  <?php $custom_query = new WP_Query('post_type=page&posts_per_page=1'); // show pages only
    while($custom_query->have_posts()) : $custom_query->the_post(); ?>

        <div class="copy">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>

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
              </div><!--end title-date-post-->
              <div class="tags">
                <h3><?php the_tags(); ?></h3>
              </div><!--end tags-->
            </div><!--end copy-->

          </li>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>

    </ul>

  </section>
<?php
get_footer();?>


