<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        // $customers = [
        //     "ali",
        //     "habib",
        //     "HabibALi",
        // ];
        return view("internals/customers",[
            'customers' => Customer::all(),
        ]
    );
    }

     public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3'
        ]);
        $customers = new Customer();
        $customers->name = request('name');
        $customers->save();
        return redirect()->back();
        // dd(request('name'));
    }
}
