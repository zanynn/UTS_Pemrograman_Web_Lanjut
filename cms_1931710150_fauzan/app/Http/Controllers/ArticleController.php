<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bodykit;
use App\Message;
use Illuminate\Support\Facades\Cache;
class ArticleController extends Controller
{
    public function __invoke($id){
        $bodykits = Bodykit::where('id',$id)->first();
        return view('Article' , compact('bodykits'));
    }

    public function manage(){
        $bodykits = Bodykit::all();
        return view('Manage',['bodykits' => $bodykits]);
    }

    public function add(){
        return view('AddProduct');
    }

    public function create(Request $request){
        Bodykit::create([
            'title' => $request->title,
            'content' => $request->content,
            'imageurl' => $request->image,
        ]);
        return redirect('/');
    }

    public function edit($id){
        $bodykits = Bodykit::find($id);
        return view('EditProduct',['bodykit'=>$bodykits]);
    }

    public function update($id , Request $request){
        $bodykits = Bodykit::find($id);
        $bodykits->id = $request->id;
        $bodykits->title = $request->title;
        $bodykits->content = $request->content;
        $bodykits->imageurl = $request->image;
        $bodykits->save();
        return redirect('/manage');
    }

    public function delete($id){
        $bodykits = Bodykit::find($id);
        $bodykits->delete();
        return redirect('/manage');
    }

    //public function index($id){
    //    $bodykits = Bodykit::find($id);
    //    return view('Article')->with(compact('id'));

    //}
    //public function index($id){
     //   $bodykits = Cache::remember("bodykits:$id", 60, function () use ($id) {
    //        return Article::findOrFail($id);
    //    });
    //    return view('Article')
    //        ->with('bodykits', $bodykits);
    //}

    //public function index($id){
    //    
    //    $id = Bodykit::all();
    //    return view('Article',['bodykits'=>$id]);
    //}
    
}
