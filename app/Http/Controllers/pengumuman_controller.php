<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengumuman;
use App\kategori_pengumuman;

class pengumuman_controller extends Controller
{
    //
     public function index(){
    	$pengumuman=pengumuman::all();

    	return view('pengumuman.index', compact('pengumuman'));
    }
    public function show ($id){
    	$pengumuman=pengumuman::find($id);

        return view('pengumuman.show', compact('pengumuman'));
    }
    public function create(){

    	$kategori_pengumuman=kategori_pengumuman::pluck('nama', 'id');

    	return view('pengumuman.create', compact('kategori_pengumuman'));
    }
     public function store(Request $request){
    	$input= $request->all();
    	
    	pengumuman::create($input);

    	return redirect(route('pengumuman.index'));
    }
     public function edit($id){
        $pengumuman=pengumuman::find($id);
        $kategori_pengumuman=kategori_pengumuman::pluck('nama', 'id');

        if (empty($pengumuman)){
            return redirect(route('pengumuman.index'));
        }
        return view('pengumuman.edit', compact('pengumuman', 'kategori_pengumuman'));
    }
    public function update(Request $request, $id)
    {
        $input= $request->all();
        
        pengumuman::find($id)->update($input);

        return redirect(route('pengumuman.index'));
    }
    public function destroy($id){
        $pengumuman=pengumuman::find($id);

        if (empty($pengumuman)){
            return redirect(route('pengumuman.index'));
        }
        $pengumuman->delete();
        return redirect(route('pengumuman.index'));
    }
}
