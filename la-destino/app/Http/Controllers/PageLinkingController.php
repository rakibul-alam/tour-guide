<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageLinkingController extends Controller
{
    public function index(){
//        return "hi";
        $title = "La Destino";
        return view('font-panel.view-pages.index',[
            'title' => $title
        ]);
    }

    public function aboutPage(){
        $title ="La Destino - About";
        return view('font-panel.view-pages.about',[
            'title'=> $title
        ]);
    }

    public function packagesPage(){
        $title ="La Destino - Packages";
        return view('font-panel.view-pages.packages',[
            'title'=> $title
        ]);
    }

    public function hotelsPage(){
        $title ="La Destino - Hotels";
        return view('font-panel.view-pages.hotels',[
            'title'=> $title
        ]);
    }

    public function blogsPage(){
        $title ="La Destino - Blogs";
        return view('font-panel.view-pages.blogs',[
            'title'=> $title
        ]);
    }

    public function contactPage(){
        $title ="La Destino - Contact";
        return view('font-panel.view-pages.contact',[
            'title'=> $title
        ]);
    }

}
