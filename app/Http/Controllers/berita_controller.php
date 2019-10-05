<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;

class berita_controller extends Controller
{
    //
    public function index(){
    	$berita=berita::all();

    	return view('berita.index', compact('berita'));
    }
    public function show ($id){
    	$berita=berita::find($id);
    }
}
