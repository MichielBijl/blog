<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID();?>">
    <header>
      <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
      <time datetime="<?php the_time('Y-m-d') ?>"> <span>Published on </span><?php the_time('jS of F , Y') ?></time>
    </header>
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  </article>
<?php endwhile; endif; ?>

<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

<?php get_footer(); ?>
