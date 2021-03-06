<?php

namespace app\Controllers;

use System\Controller;

class SiteDownController extends Controller
{

    public function index()
    {
        $model = $this->load->model('Settings')->get(3);
        if ($model->v === 'on') {
            return $this->url->redirect('/');
        }
        $this->blogLayout->disable('sidebar');
        $this->html->setTitle('Site is down');
        $data['msg'] = $this->load->model('Settings')->get(4)->v;
        $view        = $this->view->render('/blog/site-down', $data);
        return $this->blogLayout->render($view);
    }

}
