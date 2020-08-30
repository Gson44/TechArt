<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
class MusicController extends Controller
{
    //
    public function index(){
        $musics = Music::all();
        return view('music', ['music' => $musics]);
    }
}
