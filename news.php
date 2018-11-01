<?php /* Template Name: News/Media */ ?>
<?php get_header(); ?>
<div class="news-header">
    <div style="max-width: 80%; margin: 0 auto;">
      <h1>What's Happening</h1>
      <h2>
        Stay up-to-date on the Educational Mentoring
        Program and the Domestic Violence Initiative and
        the latest news of Of Home, Family and Future.
      </h2>
    </div>
  </div>
  <div class="content news-content">
    <?php if ( have_posts() ) : ?>
    <?php

    while ( have_posts() ) : the_post();
      get_template_part('content', get_post_format() );

    endwhile;

    the_posts_pagination( array(
      'prev_text' => __('Previous page', 'dylantest'),
      'next_text' => __('Next page', 'dylantest'),
      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'dylantest' ) . ' </span>',
    ) );

  else :
    get_template_part( 'content', 'none');

  endif;
  ?>
  </div>
<?php get_footer(); ?>
