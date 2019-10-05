<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_galeri;

class kategori_galeri_controller extends Controller
{
    //
    public function index(){
    	$kategori_galeri=kategori_galeri::all();

    	return view ('kategori_galeri.index', compact ('kategori_galeri'));
    }
    public function show ($id){
    	$kategori_galeri=kategori_galeri::find($id);
    }
     public function create(){
    	return view('kategori_galeri.create');
    }
    public function store(Request $request){
    	$input= $request->all();
    	
    	kategori_galeri::create($input);

    	return redirect(route('kategori_galeri.index'));
    }
}
