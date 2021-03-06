<?php

namespace app\Controllers\Blog\Common;

use System\Controller;

class FooterController extends Controller
{

    public function index()
    {
        $data['user']      = $this->load->model('Login')->user();
        $model             = $this->load->model('Settings');
        $data['title']     = $model->get(1)->v;
        $data['facebook']  = $model->get(7)->v;
        $data['twitter']   = $model->get(9)->v;
        $data['instagram'] = $model->get(10)->v;
        return $this->view->render('blog/common/footer', $data);
    }

}
