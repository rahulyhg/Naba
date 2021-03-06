<?php

namespace app\Controllers\Blog;

use System\Controller;
use Api\Facebook\Auth\Facebook;

/**
 * This class is meant to organise social networks APIs to make it easy for users to login using their social accounts.
 *
 * @author Amr
 */
class SocialController extends Controller
{

    public function facebook()
    {
        $facebook = new Facebook([
            'app_id'     => 'app_id',
            'app_secret' => 'app_secret',
        ]);
        if ($facebook->auth()) {
            $data['user'] = $facebook->user();
        } else {
            $redirect_back_url = 'login.php';
            $login_url         = $facebook->getLoginUrl($redirect_back_url);
        }
        return $data;
    }

}
