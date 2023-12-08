<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Profile;
use App\Models\Comment;


class StudentController extends Controller
{
    //
    public function index()
    {

        $student = Student::withCount(['comment' => function ($query) {
            $query->where('comment', 'like', '%king%');
        }])->get();
        dd($student);
    }

    public function store()
    {
        $student = new Student;
        $student->first_name = 'Dale';
        $student->last_name = 'Lanto';
        $student->save();
        dd($student);
    }

    public function store_profile()
    {

        $student = Student::find(1);

        $profile = new Profile;
        $profile->student_id = $student->id;
        $profile->email = 'dalelanto@gmail.com';
        $profile->phone = '7623423814';
        $profile->save();

        dd($profile);
    }

    public function store_comment()
    {

        $student = Student::find(1);

        $comment = new Comment;
        $comment->student_id = $student->id;
        $comment->comment = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust';
        $comment->save();

        $comment = new Comment;
        $comment->student_id = $student->id;
        $comment->comment = 'king it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydne';
        $comment->save();

        $comment = new Comment;
        $comment->student_id = $student->id;
        $comment->comment = 'ed to be sure there isnt anything embarrassing hidden in the middle of text. All the Latin words,';
        $comment->save();

        dd($comment);
    }
}
