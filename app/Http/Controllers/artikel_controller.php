<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\kategori_artikel;

class artikel_controller extends Controller
{
    //
    public function index(){
    	$artikel=artikel::all();

    	return view('artikel.index', compact('artikel'));
    }
    public function show ($id){
    	$artikel=artikel::find($id);

        return view('artikel.show', compact('artikel'));
    }
    public function create(){

    	$kategori_artikel=kategori_artikel::pluck('nama', 'id');

    	return view('artikel.create', compact('kategori_artikel'));
    }
     public function store(Request $request){
    	$input= $request->all();
    	
    	artikel::create($input);

    	return redirect(route('artikel.index'));
    }
    public function edit($id){
        $artikel=artikel::find($id);
        $kategori_artikel=kategori_artikel::pluck('nama', 'id');

        if (empty($artikel)){
            return redirect(route('artikel.index'));
        }
        return view('artikel.edit', compact('artikel', 'kategori_artikel'));
    }
    public function update(Request $request, $id)
    {
        $input= $request->all();
        
        artikel::find($id)->update($input);

        return redirect(route('artikel.index'));
    }
    public function destroy($id){
        $artikel=artikel::find($id);

        if (empty($artikel)){
            return redirect(route('artikel.index'));
        }
        $artikel->delete();
        return redirect(route('artikel.index'));
    }
}
