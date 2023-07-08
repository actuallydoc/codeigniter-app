<?php
namespace App\Controllers;
use App\Models\BlogModel;
class Posts extends BaseController
{
    public function index($slug)
    {
        // We get access to the database using the model
        $model = new BlogModel();
        // We get the blog post from the database using the model
        $data["posts"] = $model->searchPosts($slug);
        // If the post doesn't exist
        // We get access to the session library
        $session = \Config\Services::session();
        // We get the session data
        $data["session"] = $session->get();
        // We get access to the view helper
        helper("view");
        // We load the header, post and footer views

        return view('templates/header', $data) . view('blog/posts') . view('templates/footer');
    }
}
