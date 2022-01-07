<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\student;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function addStudent()
    {
        $students = [
            ['name' => 'Kazi Omar','email' => 'kaziomar144@gmail.com', 'phone'=>'+8801701029783'],
            ['name' => 'Kazi Jakir','email' => 'jakir@gmail.com', 'phone'=>'+8801755886421'],
            ['name' => 'Tahsan','email' => 'tahsan123@gmail.com', 'phone'=>'+8801870777370'],
        ];
        Student::insert($students);
        return 'Student are added';
    }
    public function addPost()
    {
        $posts = [
            ['title' => 'This is first title', 'body'=>'This first text'],
            ['title' => 'This is second title', 'body'=>'This second text'],
        ];
        Post::insert($posts);
        return 'posts are added';
    }
    public function getStudent()
    {
        $students = Student::all();

        return $students;
    }
    public function getPost()
    {
        $post = Post::all();

        return $post;
    }
}
