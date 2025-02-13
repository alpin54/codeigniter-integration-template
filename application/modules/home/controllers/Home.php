<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{

  // -- __construct
  public function __construct()
  {
    parent::__construct();
  }

  // -- index
  public function index()
  {
    $seo = (object) [
      'navigation_menu' => 'beranda',
      'title' => 'Beranda',
    ];

    // - template (seo, content_module, slug)
    template_page($seo, 'home/view');
  }

  // -- view
  public function view()
  {
    $data = [
      'example' => [
        'title' => 'Codeigniter Integration Template Project Website',
        'subtitle' => 'Example Components',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus obcaecati voluptatem consectetur sequi quisquam exercitationem. Facere ut ex in mollitia.',
        'list' => [
          [
            'img' => '1.jpeg',
            'title' => 'Lorem ipsum dolor sit amet.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus obcaecati voluptatem consectetur sequi quisquam exercitationem. Facere ut ex in mollitia.'
          ],
          [
            'img' => '2.jpeg',
            'title' => 'Lorem ipsum dolor sit amet.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus obcaecati voluptatem consectetur sequi quisquam exercitationem. Facere ut ex in mollitia.'
          ],
          [
            'img' => '3.jpeg',
            'title' => 'Lorem ipsum dolor sit amet.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus obcaecati voluptatem consectetur sequi quisquam exercitationem. Facere ut ex in mollitia.'
          ]
        ]
      ]
    ];

    $this->load->view('index', $data);
  }
}
