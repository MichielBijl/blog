<?php
/**
 * @package Sortedam
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<main id="main" role="main">
  <h2>Archives by Month:</h2>
  <ul>
    <?php wp_get_archives('type=yearly'); ?>
  </ul>
</main>

<?php get_footer(); ?>
