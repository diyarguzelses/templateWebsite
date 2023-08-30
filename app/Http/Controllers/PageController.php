<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contactPage(){
        return view('front.pages.contact');
    }

    public function contactAdd(Request $request){
        $var=new Contact();
        $var->name=$request->name;
        $var->email=$request->email;
        $var->subject=$request->subject;
        $var->message=$request->message;
        $var->save();
       /*
       Contact::create([
            'name'=>$request->name,
            ]);
       */
        return redirect()->route('contactPage')->with('success','Başarıyla Kaydedildi');


    }
    public function about(){

        $about=About::where('id',1)->first();
    return view('front.pages.about',compact('about'));
    }
}
