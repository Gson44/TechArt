<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,File;
use App\TechModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use Image;

class TechModelController extends Controller
{
    //
    public function index(){
        $techModel = TechModel::all();
        return view('techmodel', ['techmodel' => $techModel]);
    }
    public function save(Request $req){

        $name = $req->input('name');
        $name = $name . '.';
        echo $name;
        $file = $req->file('image');
        $image = \Image::make($file);
        // perform orientation using intervention
        $image->orientate();
        $imageName = $name . $file->getClientOriginalExtension();

        $destinationPath = 'uploads';
        $file->move($destinationPath, $imageName);
        // save image
        // $insert['image'] = "$imageName";
        // $insert['name'] = "$name";
        // $check = Image::insertGetId($insert);
        $techmodel = new TechModel();
        $techmodel->name=$name;
        $techmodel->image=$imageName;
        $techmodel->save();



    }
    
}

