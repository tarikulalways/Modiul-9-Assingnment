<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    public function home(){
        return view('frontent.pages.home');
    }
    public function about(){
        return view('frontent.pages.about');
    }
    public function service(){
        return view('frontent.pages.sevice');
    }
    public function protfolio(){
        return view('frontent.pages.protfolio');
    }
    public function contact(){
        return view('frontent.pages.contact');
    }

    public function message(Request $request){
        $validate = $request->validate([
            'name'=> ['required', 'string'],
            'email'=> ['required','email'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'max:200']
        ]);
        if($request->all()){
            return redirect()->route('contact')->with('success','Your Message Send Successfull');
        }
    }


}
