<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer extends MX_Controller
{

  // - bottom
  public function bottom($footer_data = [], $template = 'default')
  {
    $data = [
      'template' => $template,
      'site_name' => $footer_data['site_name'],
      'site_url' => $footer_data['site_url'],
      'navigation_menu' => $footer_data['navigation_menu'],
      'copyright' => $footer_data['copyright'],
    ];

    $this->load->view('footer', $data);
  }
}
