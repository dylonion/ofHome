<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/ofHome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>

  <div class="blog-masthead">
    <div class="container">
      <nav class="blog-nav">
        <li class="page_item"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/Home_icon_3.svg"/></a></li>
        <li class="page_item">
          <div class="dropdown">
            <a href="<?php echo home_url(); ?>/about-us/">About Us</a>
            <div class="dropdown-content">
              <a href="<?php echo home_url(); ?>/about-us/">Founders Story</a>
              <a href="<?php echo home_url(); ?>/board-members-executive-director/">Board Members & Executive Director</a>
              <a href="<?php echo home_url(); ?>/faq/">Frequently Asked Questions</a>
            </div>
          </div>
        </li>
        <li class="page_item">
          <div class="dropdown">
            <a href="<?php echo home_url(); ?>/programs/">Programs</a>
            <div class="dropdown-content">
              <a href="<?php echo home_url(); ?>/programs/domestic-violence-initiative/">Domestic Violence Initiative</a>
              <a href="<?php echo home_url(); ?>/programs/">Educational Mentoring Initiative</a>
            </div>
          </div>
        </li>
        <li class="page_item">
          <div class="dropdown">
            <a href="<?php echo home_url(); ?>/stories/">Stories</a>
            <div class="dropdown-content" id="stories-menu">
              <a href="<?php echo home_url(); ?>/stories/">Success Stories</a>
              <a href="<?php echo home_url(); ?>/testimonials/">Testimonials</a>
            </div>
          </div>
        </li>
        <li class="page_item"><a href="<?php echo home_url(); ?>/news-media/">News/Media</a></li>
        <li class="page_item"><a href="<?php echo home_url(); ?>/donate-give/">Donate/Give</a></li>
      </nav>
    </div>
  </div>
  <div class="container">
