<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [
            [
                "title" => "Blog Entry Title 1",
                "main" => "post1-main.jpg",
                "thumbs" => ["post1-thumb1.jpg", "post1-thumb2.jpg", "post1-thumb3.jpg"]
            ],
            [
                "title" => "Blog Entry Title 2",
                "main" => "post2-main.jpg",
                "thumbs" => ["post2-thumb1.jpg", "post2-thumb2.jpg", "post2-thumb3.jpg"]
            ],
            [
                "title" => "Blog Entry Title 3",
                "main" => "post3-main.jpg",
                "thumbs" => ["post3-thumb1.jpg", "post3-thumb2.jpg", "post3-thumb3.jpg"]
            ]
        ];

        return view('blog', compact('blogs'));
    }
}
