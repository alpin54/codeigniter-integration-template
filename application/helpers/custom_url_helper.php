<?php

if (!function_exists('f_url')) {
  function f_url($value){
    return url_title($value, '-', TRUE);
  }
}

if (!function_exists('f_url_magazine')) {
  function f_url_magazine($value){
    return base_url('majalah/'. f_date_year($value['publish_date']) . '/' . $value['edition'] . '/' . url_title($value['title'], '-', TRUE));
  }
}

if (!function_exists('f_url_magazine_read')) {
  function f_url_magazine_read($value){
    return base_url('majalah/read/'. f_date_year($value->publish_date) . '/' . $value->edition . '/' . url_title($value->title, '-', TRUE));
  }
}

if (!function_exists('f_url_magazine_download')) {
  function f_url_magazine_download($value){
    return FILES . 'magazine/file/' . $value->file . '?v=1.0.0';
  }
}

if (!function_exists('f_url_news')) {
  function f_url_news($value){
    return base_url('berita/' . $value['news_id'] . '/' . url_title($value['title'], '-', TRUE));
  }
}

if (!function_exists('f_url_promo')) {
  function f_url_promo($value){
    return base_url('promo/' . $value['promo_id'] . '/' . url_title($value['title'], '-', TRUE));
  }
}
