<?php
/**
 * @package Sortedam
 */

get_header(); ?>

<main id="main">

  <?php if (have_posts()) :

    $post = $posts[0]; // Hack. Set $post so that the_date() works.
      /* If this is a category archive */
      if (is_category()) { ?>
      <h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
      <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
      <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
      <h1>Archive for <?php the_time('F jS, Y'); ?></h1>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <h1>Archive for <?php the_time('F, Y'); ?></h1>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <h1>Archive for <?php the_time('Y'); ?></h1>
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
      <h1>Author Archive</h1>
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h1>Blog Archives</h1>
    <?php }

    while (have_posts()) : the_post();
      get_template_part('template-parts/post');
    endwhile;
  else :

    if ( is_category() ) { // If this is a category archive
      printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
    } else if ( is_date() ) { // If this is a date archive
      echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
    } else {
      echo("<h2>No posts found.</h2>");
    }

  endif; ?>

</main>

<?php get_footer(); ?>
