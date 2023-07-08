<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function post($slug) {
        // We get access to the database using the model
        $model = new BlogModel();
        // We get the blog post from the database using the model
        $data["post"] = $model->getPosts($slug);
        // If the post doesn't exist
        if(empty($data["post"])) {
            // Show 404 error
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Cannot find the blog post: $slug");
        }
        // We get access to the session library
        $session = \Config\Services::session();
        // We get the session data
        $data["session"] = $session->get();
        // We get access to the view helper
        helper("view");
        // We load the header, post and footer views

        return view('templates/header', $data) . view('blog/post') . view('templates/footer');
    }


    public function create() {
        // This kind of helper functions only load when u do a request so it doesn't load on every page and slow down the app
        helper('form');
        // Form helper gives us access to the validation library
        $model = new BlogModel();
        // We get access to validation function from the validation library above
        if(!$this->validate([
            "title" => "required|min_length[3]|max_length[255]",
            "body" => "required"
        ])) {
            // If validation fails
            return view("templates/header") . view("blog/create") . view("templates/footer");
        }else {
            // If validation passes
            // Store the blog into the database
            // $model->save makes insert query into the database
            $model->save([
                "title" => $this->request->getVar("title"),
                // url_title() is a helper function that takes a string and converts it into a url friendly string
                "slug" => url_title($this->request->getVar("title"), "-", true),
                "body" => $this->request->getVar("body")
            ]);
            // Show success message to the user using flashdata
            // Flashdata is a session that only lasts for one request and then it's gone forever
            // import session library
            $session = \Config\Services::session();
            // Set flashdata
            // it takes two parameters, the first one is the name of the flashdata and the second one is the value of the flashdata
            $session->setFlashdata("success", "Successfuly created a new post");
            // Redirect to the home page
            return redirect()->to("/");
        }
    }
}
