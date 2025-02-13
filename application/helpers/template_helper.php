<?php
if (!function_exists('template_page')) {
  function template_page($seo, $content_module,  $slug = '', $template = 'default')
  {
    $ci = &get_instance();
    $ci->db->cache_on();
    // meta
    $ci->db->where('meta_id', 1);
    $meta = $ci->db->get('tb_meta')->row();


    // - seo
    $seo = (object) [
      'header' => [
        'template' => $template,
        'robots' => $meta->robots,
        'refresh' => $meta->refresh,
        'site_name' => $meta->site_name,
        'title' => isset($seo->title) ? $seo->title . ' - ' . $meta->title : $meta->title,
        'description' => isset($seo->description) ? $seo->description : (isset($seo->title) ? $seo->title . ' - ' . $meta->description : $meta->description),
        'keywords' => isset($seo->keywords) ? $seo->keywords . ', ' . $meta->keywords : (isset($seo->title) ? strtolower(str_replace(' ', ', ', $seo->title)) . ', ' . $meta->keywords : $meta->keywords),
        'author' => $meta->author,
        'copyright' => $meta->copyright,
        'theme_color' => $meta->theme_color,
        'domain_name' => $meta->domain_name,
        'og_image' => isset($seo->og_image) ? $seo->og_image : FILES . 'meta/og/' . $meta->og_image,
        'twitter_img' => isset($seo->twitter_img) ? $seo->twitter_img : FILES . 'meta/twt/' . $meta->twitter_image,
        'twitter' => $meta->twitter_account,
        'navigation_menu' => isset($seo->navigation_menu) ? $seo->navigation_menu : ''
      ],
      'footer' => [
        'template' => $template,
        'site_name' => $meta->site_name,
        'site_url' => $meta->site_url,
        'navigation_menu' => isset($seo->navigation_menu) ? $seo->navigation_menu : '',
        'copyright' => $meta->copyright,
      ]
    ];

    // - template
    $data = [
      'header' => modules::run('global/header/top', $seo->header, $template),
      'content' => modules::run($content_module, $slug),
      'footer' => modules::run('global/footer/bottom', $seo->footer, $template),
    ];

    $ci->load->view('template', $data);
  }
}
