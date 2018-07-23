<?php

namespace App\Http\Controllers\Admin\FAQ;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\FAQ_ETC;
use Illuminate\Http\Request;

class FAQ_ETCController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FAQ_ETC::all();
        return view('admin.admin_page.FAQ.ETC.index', compact('data'));
    }

    public function create()
    {
        $data = FAQ_ETC::all();
        return view('admin.admin_page.FAQ.ETC.create', compact('data'));
    }

    public function edit($id)
    {
        $data = FAQ_ETC::where('id', $id)->get()[0];
        return view('admin.admin_page.FAQ.ETC.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'video_url' => 'required',
            'classification' => 'required',
        ]);

        $data = FAQ_ETC::where('id', $id)
            ->update([
                'question' => $request['question'],
                'answer' => $request['answer'],
                'video_url' => $request['video_url'],
                'classification' => $request['classification']
            ]);


        return redirect(url('/admin/faq_etc'));
    }
    public function delete($id)
    {
        $data = FAQ_ETC::where('id', $id)->delete();

        return response()->json([], 204);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'video_url' => 'required',
            'classification' => 'required',
        ]);

        $data = new FAQ_ETC;
        $data->question = $request['question'];
        $data->answer = $request['answer'];
        $data->video_url = $request['video_url'];
        $data->classification = $request['classification'];

        $data->save();


        return redirect(url('/admin/faq_etc'));
    }
}
