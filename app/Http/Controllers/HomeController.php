<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Yazilar;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::first(); 
        return view('site.home.home', compact('banner'));

        $yazi = Yazilar::first(); 
        return view('site.home.home', compact('yazi'));
    }
}


