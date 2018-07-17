<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $data = User::latest()->orderby('id')->paginate(30);
        $result = [];
        return view('admin.admin_page.user.user_info.index', compact('data', 'result'));
    }
    public function search(Request $request)
    {
        $search = \App\User::where('name', "{$request->search_user}")->get();
        if ($search != null) {
            $result = $search;
        } else {
            $result = [];
        }
        $data = \App\User::latest()->orderby('id')->paginate(30);
        return view('admin.admin_page.user.user_info.index', compact('data', 'result'));
    }
    public function show(Request $request, $id)
    {
        $data = User::where('id', $id)->first();
        return view('.admin.admin_page.user.user_info.show', compact('data'));
    }

}
