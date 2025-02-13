<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends MX_Controller {

  // -- __construct
  public function __construct()
  {
    parent::__construct();
    if ($this->uri->segment(1) !== 'page-not-found') {
      redirect('page-not-found');
    }
  }

  // -- index
  public function index()
  {
    $seo = (object) [
      'navigation_menu' => 'page-not-found',
      'title' => 'Page Not Found',
    ];

    // - template (seo, content_module, slug)
    template_page($seo, 'notfound/view');
  }

  // -- view
  public function view()
  {
    $this->load->view('index');
  }
}
