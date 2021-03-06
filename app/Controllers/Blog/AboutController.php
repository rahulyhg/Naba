<?php

namespace app\Controllers\Blog;

use System\Controller;

class AboutController extends Controller
{

    /**
     * Display About-us Page
     *
     * @return mixed
     */
    public function index()
    {
        $this->blogLayout->title('About');
        $data['site_name'] = $this->load->model('Settings')->get(1)->v;
        $data['about']     = $this->load->model('Settings')->get(6)->v;
        $data['ads']       = $this->load->model('Ads')->enabled();
        $view              = $this->view->render('blog/about', $data);
        return $this->blogLayout->render($view);
    }

}
