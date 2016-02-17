<?php
/**
 * @package Sortedam
 */

get_header(); ?>

<main id="main">
  <h1>Articles</h1>
  <?php
    if (have_posts()) : while (have_posts()) : the_post();

      get_template_part('template-parts/post');

    endwhile; else: ?>

      <p>I'm telling you, the posts are not there!</p>

    <?php endif;
  ?>
</main>

<nav aria-label="More articles">
  <?php
    next_posts_link('Older <span>posts</span>');
    previous_posts_link('Newer <span>posts</span>');
  ?>
</nav>

<?php get_footer(); ?>
