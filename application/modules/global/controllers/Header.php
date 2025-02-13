<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Header extends MX_Controller
{

  // - top
  public function top($header_data = [], $template = 'default')
  {
    $data = [
      'template' => $template,
      'robots' => $header_data['robots'],
      'refresh' => $header_data['refresh'],
      'site_name' => $header_data['site_name'],
      'title' => $header_data['title'],
      'description' => $header_data['description'],
      'keywords' => $header_data['keywords'],
      'author' => $header_data['author'],
      'copyright' => $header_data['copyright'],
      'theme_color' => $header_data['theme_color'],
      'domain_name' => $header_data['domain_name'],
      'twitter_account' => $header_data['twitter'],
      'og_image' => $header_data['og_image'],
      'twitter_img' => $header_data['twitter_img'],
      'navigation_menu' => $header_data['navigation_menu'],
      'header_view' => $header_data['template']
    ];


    $this->load->view('header', $data);
  }
}
