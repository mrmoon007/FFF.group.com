<?php

namespace App\Http\Controllers;

use App\Models\Home_model;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Home_AboutController extends Controller
{
    public function homeAbout()
    {
        $abouts=Home_model::latest()->get();
        return view('admin.about.index',compact('abouts'));
    }

    public function addAbout()
    {
        return view('admin.about.create');
    }

    public function storeAbout(Request $request)
    {
        Home_model::insert([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'log_dis' => $request->log_dis,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('index.about')->with('success','About Inserted Successfully');
    }

    public function editAbout($id){
        $abouts = Home_model::find($id);
        return view('admin.about.edit',compact('abouts'));
    }

    public function updateAbout(Request $request, $id){
        //return $request;
        $update = Home_model::find($id)->update([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'log_dis' => $request->log_dis,

        ]);

        return Redirect()->route('index.about')->with('success','About Updated Successfully');
    }


    public function DeleteAbout($id){
        $delete = Home_model::find($id)->Delete();
        return Redirect()->back()->with('success','About Deleted Successfully');
    }
}
