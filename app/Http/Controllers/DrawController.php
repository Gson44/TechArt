<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,File;
use App\DrawModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
class DrawController extends Controller
{
    //
    public function index(){
        $drawing = DrawModel::all();
        return view('draw', ['drawing' => $drawing]);
    }
    public function save(Request $req){
        $drawmodel = new drawModel();
        $name = $req->input('drawingname');
        $drawmodel->name=$name;
        $name = $name . '.';
        echo $name;
        $file = $req->file('drawingimage');
        $image = \Image::make($file);
        // perform orientation using intervention
        $image->orientate();
        $imageName = $name . $file->getClientOriginalExtension();

        $destinationPath = 'uploads/drawing';
        $file->move($destinationPath, $imageName);
        // save image
        // $insert['image'] = "$imageName";
        // $insert['name'] = "$name";
        // $check = Image::insertGetId($insert);
        $drawmodel->image=$imageName;
        $drawmodel->save();
    }
}
