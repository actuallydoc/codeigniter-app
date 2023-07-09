<?php

namespace App\Controllers;
// Get the model from app\Models\BlogModel.php
use App\Models\BlogModel;
class Home extends BaseController
{
    public function index()
    {
        // Create a new instance of the BlogModel
        $model = new BlogModel();

        // Get all the rows from the blog table
        $data['news'] = $model->getPosts();

        // You can pass data to the view using the $data array
        // The data will be accessible in all views that are loaded not just the view you pass it to
        return view('templates/header', $data).view('templates/introduction') . view('pages/home') . view('templates/footer') . view('templates/location');
    }

    public function showme($page) {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        return view('pages/' . $page);
    }
}
