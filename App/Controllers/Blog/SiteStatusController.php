<?php

namespace App\Controllers\Blog;

use System\Controller;

class SiteStatusController extends Controller
{

    public function index()
    {
        $status = $this->load->model('Settings')->get(3)->v;
        if ($status === 'off') {
            return $this->url->redirect('/error');
        }
    }

}
