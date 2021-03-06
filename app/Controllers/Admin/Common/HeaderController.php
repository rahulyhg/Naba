<?php

namespace app\Controllers\Admin\Common;

use System\Controller;

class HeaderController extends Controller
{

    public function index()
    {
        $icon          = $this->load->model('Settings')->get(8)->v;
        $data['icon']  = $this->url->link('public/uploads/img/') . '/' . $icon;
        $data['title'] = $this->html->getTitle();
        $data['user']  = $this->load->model('Login')->user();
        return $this->view->render('admin/common/header', $data);
    }

}
