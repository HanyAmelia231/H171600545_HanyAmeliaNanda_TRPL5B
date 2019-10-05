<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_berita;

class kategori_berita_controller extends Controller
{
    public function index(){
    	$kategori_berita=kategori_berita::all();

    	return view('kategori_berita.index', compact ('kategori_berita'));
    }
    public function show ($id){
    	$kategori_berita=kategori_berita::find($id);
    }
    public function create(){
    	return view('kategori_berita.create');
    }
    public function store(Request $request){
    	$input= $request->all();
    	
    	kategori_berita::create($input);

    	return redirect(route('kategori_berita.index'));
    }
}