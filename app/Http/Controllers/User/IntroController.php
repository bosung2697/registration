<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function intro()
    {
        return view('user.intro.intro');
    }
    public function blog()
    {
        return view('user.intro.blog');
    }
    public function law_story()
    {
        return view('user.intro.law_story');
    }
    public function intro_column()
    {
        return view('user.intro.intro_column');
    }
    public function location()
    {
        return view('user.intro.location');
    }


}

