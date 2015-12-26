<?php
/**
 * @package Sortedam
 */

get_header(); ?>
<main id="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID();?>">
      <header>
        <h1><?php the_title(); ?></h1>
        <time datetime="<?php the_time('Y-m-d') ?>"> <span>Published on </span><?php the_time('jS \o\f F , Y') ?></time>
      </header>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <footer>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
      </footer>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
