<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsersController extends Controller{
    public function rss_search(Request $request){
        //

        $link = $request->input('rss_link');
        $rss_feed = simplexml_load_file($link);

        return view("pages.results")->with('rss_feed',$rss_feed);

    }
}