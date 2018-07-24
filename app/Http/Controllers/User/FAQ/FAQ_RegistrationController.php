<?php

namespace App\Http\Controllers\User\FAQ;

use App\FAQ_Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQ_RegistrationController extends Controller
{
    public function index()
    {
        $data = FAQ_Registration::latest()->paginate(12);
        return view('user.FAQ.faq_reg', compact('data'));
    }

//    public function show(Request $request, $id)
//    {
//        $data = FAQ_Registration::where('id', $id)->first();
//        $previous = FAQ_Registration::where('id', '<', $data->id)->max('id');
//        $next = FAQ_Registration::where('id', '>', $data->id)->min('id');
//
//        return view('Judicial.detailed.hfdetailed', compact('data', 'previous', 'next'));
//    }

}

