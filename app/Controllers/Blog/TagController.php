<?php

namespace app\Controllers\Blog;

use System\Controller;

class TagController extends Controller
{

    /**
     * Display Tag Page
     *
     * @param string name
     * @param int $id
     * @return mixed
     */
    public function index($tag)
    {
        $postsModel = $this->load->model('Posts');
        $posts      = $postsModel->getPostsByTag($tag);
        if (!$posts) {
            return $this->url->redirect('/404');
        }
        $this->blogLayout->title($tag);
        if ($this->pagination->page() != 1) {
            // then just redirect him to the first page of the category
            // regardless there is posts or not in that category
            return $this->url->redirect("/tag/$tag");
        }
        $data['tag']    = $tag;
        $data['posts']  = $posts;
        $postController = $this->load->controller('Blog/Post');

        // the idea here as follows:
        // first we will pass the $post variable to $post_box variable
        // in the view file
        // why ? because $post_box is an anonymous function
        // when calling it, it will call the "box" method
        // from the post controller
        // so it will pass to it the "$post" variable to be used in the
        // post-box view
        $data['post_box'] = function ($post) use ($postController) {
            return $postController->box($post);
        };

        $data['url']        = $this->url->link('/tag/' . seo($tag) . '/' . '?page=');
        $data['pagination'] = $this->pagination->paginate();
        $view               = $this->view->render('blog/tag', $data);
        return $this->blogLayout->render($view);
    }

}
