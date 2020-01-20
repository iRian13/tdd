<?php

namespace App\Http\Controllers;

use App\Model\Brand;
use App\Providers\PhotoUploadProvider;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('backend.brand.index', compact('brands'));
    }

    public function create(){
        return view('backend.brand.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->hasFile('image')){
            $data['image']=PhotoUploadProvider::photoUpload($request->file('image'),'upload/images/brand/',75,75);
        }
        Brand::create($data);
        return redirect('/brand');
    }
}
