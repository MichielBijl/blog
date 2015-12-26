<?php
/**
 * @package Sortedam
 */
?>
<article>
  <header>
    <h2><a href="<?php the_permalink() ?>#main" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <time datetime="<?php the_time('Y-m-d') ?>"> <span>Published on </span><?php the_time('jS \o\f F , Y') ?></time>
  </header>
  <?php the_content(); ?>
  <footer>
    <?php if (get_the_modified_date() != get_the_date()) : ?>
    <p>Last updated on
      <time datetime="<? the_modified_time('Y-m-d') ?>"><? the_modified_time('jS \o\f F , Y') ?></time>
    </p>
    <?php endif; ?>
    <p>Tags:</p>
    <ul>
      <?php the_tags('<li>', '</li><li>', '</li>'); ?>
    </ul>
  </footer>
</article>
