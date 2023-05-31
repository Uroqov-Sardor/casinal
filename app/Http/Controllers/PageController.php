<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // WEBSITE //
    // *** HOME *** //
    public function homePage() {
        $home = Home::all();
        return view('home',['homes'=>$home]);
    }

    // *** ABOUT *** //
    public function aboutPage() {
        return view('about');
    }

    // *** SERVICES *** //
    public function servicesPage() {
        return view('services');
    }

    // *** BLOG *** //
    public function blogPage() {
        return view('blog');
    }

    // *** CONTACT *** //
    public function contactPage() {
        return view('contact');
    }

    // *** ADMIN PANEL *** //
    public function aPanelCheckPage() {
        return view('admin.admin-check');
    }

    // ADMIN PANEL //
    // *** DASHMIN *** //
    public function adminPanelDashmin() {
        return view('admin.admin-master');
    }

    // *** HOME *** //
    public function adminHomePage() {
        return view('admin.admin-home');
    }
    
    // *** HOME ALL POST *** //
    public function adminHomeAllPost() {
        $home = Home::all();
        return view('admin.home-all-post',['homes'=>$home]);
    }

    // *** HOME EDIT POST *** //
    public function adminHomeEditPost($id) {
        $home = Home::findOrFail($id);
        return view('admin.home-edit-post',['home'=>$home]);
    }
}
