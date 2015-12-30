<?php
/**
 * @package Sortedam
 */
?>
<!DOCTYPE html>
<?php if(is_home()): ?>
  <html xmlns="http://www.w3.org/1999/xhtml" id="home">
<?php else : ?>
  <html xmlns="http://www.w3.org/1999/xhtml">
<?php endif; ?>
  <head>
    <meta charset="UTF-8">
    <title><?php wp_title('—', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" type="image/png" href="/wp-content/themes/sortedam/icon.png" />
    <?php wp_head(); ?>
  </head>
  <body>
    <a href="#main">Skip to main content</a>
    <header role="banner">
      <div>
        <p>Michiel Bijl</p>
        <p>Accessibility advocate and front-end author</p>
      </div>
      <nav role="navigation">
        <ul>

          <!-- TODO: This must be possible some other way... -->
          <?php if(is_home() && !is_paged()): ?>
            <li><a href="/" aria-current="page">Home</a></li>
          <?php else : ?>
            <li><a href="/">Home</a></li>
          <?php endif; ?>

          <li><a href="/about-this-site">About this site</a></li>
          <li><a href="/cv">Curriculum Vitae</a></li>
        </ul>
      </nav>
    </header>
