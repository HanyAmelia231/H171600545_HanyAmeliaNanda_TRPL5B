<?php

namespace App\Http\Controllers;

use App\kategori_artikel;
use Illuminate\Http\Request;

class kategori_artikel_controller extends Controller
{
    public function index(){
    	$kategori_artikel=kategori_artikel::all();

    	return  view('kategori_artikel.index', compact('kategori_artikel'));
    }
    public function show ($id){
    	$kategori_artikel=kategori_artikel::find($id);
    }
    public function create(){
    	return view('kategori_artikel.create');
    }
    public function store(Request $request){
    	$input= $request->all();
    	
    	kategori_artikel::create($input);

    	return redirect(route('kategori_artikel.index'));
    }
}

