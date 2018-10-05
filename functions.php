<?php

function get_images_from_media_library() {
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'image',
        'post_status' => 'inherit',
        'posts_per_page' => 5,
        'orderby' => 'rand'
    );
    $query_images = new WP_Query( $args );
    $images = array();
    foreach ( $query_images->posts as $image) {
        $images[]= $image;// ->guid;
    }
    return $images;
}

function display_images_from_media_library() {

  $imgs = get_images_from_media_library();
  $html = '<div id="media-gallery">';

  foreach($imgs as $img) {

    // $html .= '<img src="' . $img . '" alt="" />';
    $html .= '<p>' . print_r($img) . '</p>';

  }

  $html .= '</div>';

  return $html;

}
