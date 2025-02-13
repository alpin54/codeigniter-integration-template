<?php

if (!function_exists('file_magazine_cover')) {
  function file_magazine_cover($value, $detail = false){
    $file_name = $detail ? $value->image_cover : $value['image_cover'];
    return FILES . 'magazine/cover/' . $file_name;
  }
}

if (!function_exists('file_news_thumbnail')) {
  function file_news_thumbnail($value){
    return FILES . 'news/thumbnail/' . $value['image'];
  }
}

if (!function_exists('file_news_detail')) {
  function file_news_detail($value){
    return FILES . 'news/detail/' . $value->image;
  }
}

if (!function_exists('file_promo_thumbnail')) {
  function file_promo_thumbnail($value){
    return FILES . 'promo/thumbnail/' . $value['image'];
  }
}
