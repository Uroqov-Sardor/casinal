<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // ADMIN CHECK //
    public function adminCheck(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $admin = User::where([
            ['email',$request['email']],
            ['password',$request['password']]
        ])->first();

        if($admin) {
            Auth::login($admin);

            return redirect()->route('admin.dashmin');
        }
    }

    // ADMIN HOME POST //
    public function adminHomePostAdd(Request $request) {
        $request->validate([
            'sTitle'=>'required',
            'sText'=>'required',
            'sImg'=>'required',
            'tTitle'=>'required',
            'tText'=>'required',
            'tImg'=>'required'
        ]);

        $home = new Home();

        // slider img
        $home_slider_img = $request->file('sImg');
        $home_slider_img_new = rand()."_".$home_slider_img->getClientOriginalName();
        $home_slider_img->move(public_path('temp/images'),$home_slider_img_new);

        // testdimonial img
        $home_testdimonial_img = $request->file('tImg');
        $home_testdimonial_img_new = rand()."_".$home_testdimonial_img->getClientOriginalName();
        $home_testdimonial_img->move(public_path('temp/images'),$home_testdimonial_img_new);

        $home->sliderTitle = $request['sTitle'];
        $home->sliderText = $request['sText'];
        $home->sliderImg = $home_slider_img_new;
        $home->testimonialName = $request['tTitle'];
        $home->testimonialText = $request['tText'];
        $home->testimonialImg = $home_testdimonial_img_new;

        if($request->user()->homePost()->save($home)) {
            $message = 'Home Post save successfully';
        }

        return redirect()->back()->with([
            'message'=>$message
        ]);
    }

    // ADMIN HOME DELETE POST //
    public function adminHomeDeletePost($id) {
        $home = Home::where('id',$id)->first();

        if(Auth::user()->id != $home->user_id) {
            return redirect()->back();
        }
        
        $home->delete();

        return redirect()->back()->with(['message'=>"Deleted"]);
    }
}
