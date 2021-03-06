<?php

namespace app\Controllers\Blog;

use System\Controller;

class ActivateController extends Controller
{

    /**
     * Display activation code form
     *
     * @param text $code Activation code
     * @return mixed
     */
    public function index($code)
    {
        $loginModel = $this->load->model('Login');
        if ($loginModel->isLogged()) {
            return $this->url->redirect('/');
        }
        $this->blogLayout->disable('sidebar');
        $this->blogLayout->title('Account activation');
        $user = $this->load->model('Users')->fetch($code, 'code');
        if (!$user) {
            return $this->url->redirect('/404');
        } elseif ($user->status == 'enabled') {
            return $this->url->redirect('/404');
        }
        $this->load->model('Users')->activate($user->id);
        $data['success'] = 'Your account has been successfully activated 😀<br>You\'ll be redirected to <a href ="' . url('/login') . '">login page</a>';
        $view            = $this->view->render('blog/users/activate', $data);
        return $this->blogLayout->render($view);
    }

}
