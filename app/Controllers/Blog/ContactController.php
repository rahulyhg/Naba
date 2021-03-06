<?php

namespace app\Controllers\Blog;

use System\Controller;

class ContactController extends Controller
{

    /**
     * Displaying contact form
     *
     * @return mixed
     */
    public function index()
    {
        $this->blogLayout->title('Contact');
        $data['site_email'] = $this->load->model('Settings')->get(2)->v;
        $data['contact']    = $this->load->model('Settings')->get(5)->v;
        $data['ads']        = $this->load->model('Ads')->enabled();
        $view               = $this->view->render('blog/contact', $data);
        return $this->blogLayout->render($view);
    }

}
