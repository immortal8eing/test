<?php

namespace App\Http\Controllers;

use App\Models\Categories;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function index(){
        $getCategories = Categories::all();

        return view('adminapp.category', compact('getCategories'));
    }

    public function destroy($id){
        $getCategori = Categories::find($id);
        $getCategori->delete();
        return redirect()->back();
    }
}
