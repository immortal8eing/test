<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){

        $getproducts = \App\Models\Products::all();

        return view('adminapp.product', compact('getproducts'));

    }

    public function destroy($id){
        $getproducts = Products::find($id);
        $getproducts->delete();
        return redirect()->back();

    }
}
