<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Me;
use Illuminate\Support\Facades\Cache;

class MeController extends Controller
{
    public function __invoke(){
        Cache::remember('me', 10, function(){
            return Me::all();

    });
        $me = Cache::get('me');
        return view('Me')->with(compact('me'));
    }
    public function edit($id){
        $me = Me::find($id);
        return view('EditMe',['me'=>$me]);
    }
    public function update($id , Request $request){
        $me = Me::find($id);
        $me->id = $request->id;
        $me->imageMe = $request->imageMe;
        $me->nameMe = $request->nameMe;
        $me->descriptionMe = $request->descriptionMe;
        $me->save();
        return redirect('/me');
    }
}
