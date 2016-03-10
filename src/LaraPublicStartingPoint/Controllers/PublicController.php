<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PublicController extends Controller
{

    public function home(){
        return view('public.home.index');
    }
    /*
    | Don't edit or remove this comment. It work whit artisan command make:newpublicpage
    */

}