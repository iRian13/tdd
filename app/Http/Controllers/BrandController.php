<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('backend.brand.index');
    }

    public function create(){
        return view('backend.brand.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('image');
        $folder_name = 'upload/images/brand';
        dd($image);
    }
}
