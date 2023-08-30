<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

class PanelController extends Controller
{
    public function aboutPage(){
        return view('panel.pages.about');

    }
    public function createAbout(Request $request){

        $var=new About();

        $var->job=$request->job;
        $var->content=$request->content;
        $var->date_of_birth=$request->date_of_birth;
        $var->phone=$request->phone;
        $var->city=$request->city;
        $var->age=$request->age;
        $var->degree=$request->degree;
        $var->email=$request->email;
        $var->freelance=$request->freelance;
        if($request->hasFile('image')){
            $path=public_path("Photos/");
            $name=Str::random(10);
            $file=$request->file("image");
            $name.=$name.$file->getClientOriginalName();
            $file->move($path,$name);
            $var->image=$name;

        }

         $var->save();
         return redirect()->route('panel.aboutPage')->with('succes','Başarıyla Kaydedildi');

    }

}
