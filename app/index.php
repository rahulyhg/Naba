<?php

// Whitelist routes:
use System\App;

$app = App::getInstance();

// Initialising Middlwares
if (strpos($app->request->url(), '/admin') === 0) {
    $app->route->callFirst(function ($app) {
        $app->load->controller('Admin/Access')->index();
    });
}
// Checking site status
if (strpos($app->request->url(), '/admin') !== 0 && strpos($app->request->url(), '/logout') !== 0 && strpos($app->request->url(), '/error') !== 0) {
    $app->route->callFirst(function ($app) {
        $app->load->controller('Blog/SiteStatus')->index();
    });
}
// Share admin layout
$app->share('adminLayout', function ($app) {
    return $app->load->controller('Admin/Common/Layout');
});

// Share blog layout
$app->share('blogLayout', function ($app) {
    return $app->load->controller('Blog/Common/Layout');
});

// Admin Login
$app->route->add('/admin/login', 'Admin/Login');
$app->route->add('/admin/login/submit', 'Admin/Login@submit', 'POST');

// Dashboard
$app->route->add('/admin', 'Admin/Dashboard');
$app->route->add('/admin/dashboard', 'Admin/Dashboard');
$app->route->add('/admin/submit', 'Admin/Dashboard@submit', 'POST');

// Users
$app->route->add('/admin/users', 'Admin/Users');
$app->route->add('/admin/users/add', 'Admin/Users@add', 'POST');
$app->route->add('/admin/users/submit', 'Admin/Users@submit', 'POST');
$app->route->add('/admin/users/edit/:id', 'Admin/Users@edit', 'POST');
$app->route->add('/admin/users/save/:id', 'Admin/Users@save', 'POST');
$app->route->add('/admin/users/delete/:id', 'Admin/Users@delete', 'POST');

// Users Groups
$app->route->add('/admin/users-groups', 'Admin/UsersGroups');
$app->route->add('/admin/users-groups/add', 'Admin/UsersGroups@add', 'POST');
$app->route->add('/admin/users-groups/submit', 'Admin/UsersGroups@submit', 'POST');
$app->route->add('/admin/users-groups/edit/:id', 'Admin/UsersGroups@edit', 'POST');
$app->route->add('/admin/users-groups/save/:id', 'Admin/UsersGroups@save', 'POST');
$app->route->add('/admin/users-groups/delete/:id', 'Admin/UsersGroups@delete', 'POST');

// Posts
$app->route->add('/admin/posts', 'Admin/Posts');
$app->route->add('/admin/posts/add', 'Admin/Posts@add');
$app->route->add('/admin/posts/submit', 'Admin/Posts@submit', 'POST');
$app->route->add('/admin/posts/edit/:id', 'Admin/Posts@edit');
$app->route->add('/admin/posts/save/:id', 'Admin/Posts@save', 'POST');
$app->route->add('/admin/posts/delete/:id', 'Admin/Posts@delete', 'POST');

// Comments
$app->route->add('/admin/comments', 'Admin/Comments');
$app->route->add('/admin/:id/comments/delete', 'Admin/Comments@delete', 'POST');

// Categories
$app->route->add('/admin/categories', 'Admin/Categories');
$app->route->add('/admin/categories/add', 'Admin/Categories@add', 'POST');
$app->route->add('/admin/categories/submit', 'Admin/Categories@submit', 'POST');
$app->route->add('/admin/categories/edit/:id', 'Admin/Categories@edit', 'POST');
$app->route->add('/admin/categories/save/:id', 'Admin/Categories@save', 'POST');
$app->route->add('/admin/categories/delete/:id', 'Admin/Categories@delete', 'POST');

// Settings
$app->route->add('/admin/settings', 'Admin/Settings');
$app->route->add('/admin/settings/submit', 'Admin/Settings@submit', 'POST');

// Contact
$app->route->add('/admin/contact', 'Admin/Contact');
$app->route->add('/admin/contact/reply/:id', 'Admin/Contact@reply');
$app->route->add('/admin/contact/send/:id', 'Admin/Contact@send', 'POST');

// Ads
$app->route->add('/admin/ads', 'Admin/Ads');
$app->route->add('/admin/ads/add', 'Admin/Ads@add');
$app->route->add('/admin/ads/submit', 'Admin/Ads@submit', 'POST');
$app->route->add('/admin/ads/edit/:id', 'Admin/Ads@edit');
$app->route->add('/admin/ads/save/:id', 'Admin/Ads@save', 'POST');
$app->route->add('/admin/ads/delete/:id', 'Admin/Ads@delete', 'POST');

// Admin profile
$app->route->add('/admin/profile', 'Admin/Profile');
$app->route->add('/admin/profile/submit/:id', 'Admin/Profile@submit', 'POST');

// Logout
$app->route->add('/admin/logout', 'Admin/Logout');
$app->route->add('/logout', 'Admin/Logout');

// Blog routes
$app->route->add('/', 'Blog/Home');
$app->route->add('/category/:text/:id', 'Blog/Category');
$app->route->add('/post/:id', 'Blog/Post');
$app->route->add('/post/:id/add-comment', 'Blog/Post@addComment', 'POST');
$app->route->add('/author/:text', 'Blog/Author');
$app->route->add('/tag/:text', 'Blog/Tag');
$app->route->add('/register', 'Blog/Register');
$app->route->add('/register/submit', 'Blog/Register@submit', 'POST');
$app->route->add('/activate/:text', 'Blog/Activate');
$app->route->add('/login', 'Blog/Login');
$app->route->add('/login/submit', 'Blog/Login@submit', 'POST');
$app->route->add('/contact', 'Blog/Contact');
$app->route->add('/contact/submit', 'Blog/Contact@submit', 'POST');
$app->route->add('/about', 'Blog/About');
$app->route->add('/profile', 'Blog/Profile');
$app->route->add('/profile/submit/:id', 'Blog/Profile@submit', 'POST');
$app->route->add('/search', 'Blog/Search');
// Not found routes
$app->route->add('/404', 'NotFound');
$app->route->notFound('/404');
// Site down route
$app->route->add('/error', 'SiteDown');
