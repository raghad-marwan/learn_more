<?php

namespace App\Http\Controllers\Site1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home()
    {
        return '<h1>home</h1>';
    }

    function about()
    {
        return '<h1>about</h1>';
    }
    function contact()
    {
        return '<h1>contact</h1>';
    }

    function msg($id)
    {
        return  view('siteone.msg')->with('id' ,$id  ) ;
    }
}
