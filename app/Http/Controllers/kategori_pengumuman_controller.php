<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_pengumuman;

class kategori_pengumuman_controller extends Controller
{
    //
    public function index(){
    	$kategori_pengumuman=kategori_pengumuman::all();

    	return view('kategori_pengumuman.index', compact ('kategori_pengumuman'));
    }
    public function show ($id){
    	$kategori_pengumuman=kategori_pengumuman::find($id);
    }
    public function create(){
    	return view('kategori_pengumuman.create');
    }
    public function store(Request $request){
    	$input= $request->all();
    	
    	kategori_pengumuman::create($input);

    	return redirect(route('kategori_pengumuman.index'));
    }
}
