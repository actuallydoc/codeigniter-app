<?php namespace App\Models;

// Get the model class from CodeIgniter
use CodeIgniter\Model;

// Create a new class called BlogModel that extends the Model class
class BlogModel extends  Model {
    // Specify the table name that this model will use
    protected  $table = 'posts';

    // This is required to protect against malicious data insertion
    protected  $allowedFields = ['title', 'slug', 'body'];
    public function getPosts($slug = null): array {

        // If no slug is provided, return all rows
        if (!$slug) {
            return $this->findAll();
        }

        // Return the first row that matches the slug
        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();
    }
    public function searchPosts($slug): array
    {
        return $this->asArray()->where(['slug' => $slug])->findAll();
    }

}