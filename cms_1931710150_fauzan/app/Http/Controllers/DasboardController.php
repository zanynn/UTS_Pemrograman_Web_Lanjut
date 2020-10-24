<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bodykit;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;


class DasboardController extends Controller
{
    public function __invoke(){
        Cache::remember('bodykit', 10, function(){
            return Bodykit::all();

    });
        $bodykit = Cache::get('bodykit');
        return view('Dasboard')->with(compact('bodykit'));
    }
}
