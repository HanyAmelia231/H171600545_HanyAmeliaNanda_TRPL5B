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

        return view('kategori_pengumuman.show', compact('kategori_pengumuman'));
    }
    public function create(){
    	return view('kategori_pengumuman.create');
    }
    public function store(Request $request){
    	$input= $request->all();
    	
    	kategori_pengumuman::create($input);

    	return redirect(route('kategori_pengumuman.index'));
    }
     public function edit($id){
        $kategori_pengumuman=kategori_pengumuman::find($id);

        if (empty($kategori_pengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }
        return view('kategori_pengumuman.edit', compact('kategori_pengumuman'));
    }
    public function update(Request $request, $id)
    {
        $input= $request->all();
        
        kategori_pengumuman::find($id)->update($input);

        return redirect(route('kategori_pengumuman.index'));
    }
    public function destroy($id){
        $kategori_pengumuman=kategori_pengumuman::find($id);

        if (empty($kategori_pengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }
        $kategori_pengumuman->delete();
        return redirect(route('kategori_pengumuman.index'));
    }
}
