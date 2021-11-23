<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index(){
        $getCustomers = Customer::all();

        return view('adminapp.customer', compact('getCustomers'));
    }

    public function destroy($id){
        $getCustomer = Customer::find($id);
        $getCustomer->delete();
        return redirect()->back();
    }
}
