<?php

namespace App\Http\Controllers;

use App\kategori_artikel;
use Illuminate\Http\Request;

class kategori_artikel_controller extends Controller
{
    public function index(){
    	$kategori_artikel=kategori_artikel::all();

        if (empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }

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
    public function edit($id){
        $kategori_artikel=kategori_artikel::find($id);

        if (empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }
        return view('kategori_artikel.edit', compact('kategori_artikel'));
    }
    public function update(Request $request, $id)
    {
        $input= $request->all();
        
        kategori_artikel::find($id)->update($input);

        return redirect(route('kategori_artikel.index'));
    }
    public function destroy($id){
        $kategori_artikel=kategori_artikel::find($id);

        if (empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }
        $kategori_artikel->delete();
        return redirect(route('kategori_artikel.index'));
    }
}

