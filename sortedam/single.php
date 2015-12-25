<?php
/**
 * @package Sortedam
 */

get_header();
?>

<main id="main">
  <?php
    if (have_posts()) : while (have_posts()) : the_post();

      get_template_part('template-parts/post');

    endwhile; else: ?>

      <p>Sorry, my cat ate that post.</p>

    <?php endif;
  ?>
</main>

<nav>
  <?php
    previous_post_link('%link', 'Previous post')
    next_post_link('%link', 'Next post')
  ?>
</nav>

<?php get_footer(); ?>
