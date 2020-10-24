<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Cache;
class AboutController extends Controller
{
    public function __invoke(){
        Cache::remember('about', 10, function(){
            return About::all();

    });
        $about = Cache::get('about');
        return view('About')->with(compact('about'));
    }
    public function manage(){
        $abouts = About::all();
        return view('ManageAbouts',['abouts' => $abouts]);
    }
    public function edit($id){
        $abouts = About::find($id);
        return view('EditAbout',['abouts'=>$abouts]);
    }
    public function update($id , Request $request){
        $abouts = About::find($id);
        $abouts->id = $request->id;
        $abouts->text = $request->text;
        $abouts->year = $request->year;
        $abouts->valuebar = $request->valuebar;
        $abouts->save();
        return redirect('/manageabout');
    }
}
