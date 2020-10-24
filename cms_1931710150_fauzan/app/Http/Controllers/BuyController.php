<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Me;
use Illuminate\Support\Facades\Cache;

class BuyController extends Controller
{
    public function __invoke(){
        return view('Buy');
    }
}
