<?php add_filter( 'the_content_more_link', 'modify_read_more_link' );
  function modify_read_more_link() {
  return '<a href="' . get_permalink() . '#main">Continue reading “'. the_title('', '', false) .'”</a>';
} ?>
