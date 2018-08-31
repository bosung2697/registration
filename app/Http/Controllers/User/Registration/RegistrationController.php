<?php

namespace App\Http\Controllers\User\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('user.online_registration.online_registration');
    }

}

