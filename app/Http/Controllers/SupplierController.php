<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::orderBy('id')->get();
        return inertia('Supplier/Index',[
            'suppliers' =>$suppliers
        ]);
    }



    public function create(){
        return inertia('Supplier/Create');
    }

    public function store(Request $request) {
        $fields = $request->validate([
            'name'=>'required',
            'contact_no' => 'required',
            'email' => 'required|email',
            'address' => 'required'
        ]);

        Supplier::create($fields);

        return redirect('/suppliers')->with('message', 'Product successfully created');
    }

    public function edit(Supplier $suppliers){

        return inertia('Supplier/Edit', ['suppliers' => $suppliers]);
    }

    public function update(Request $request, Supplier $suppliers){
        $fields = $request->validate([
            'name'=>'required',
            'contact_no' => 'required',
            'email' => 'required|email',
            'address' => 'required'
        ]);

        $suppliers->update($fields);
        return redirect('/suppliers')->with('message', "You successfully updated the supplier");
    }

    public function destroy(Supplier $suppliers) {
        $suppliers->delete();

        return back();
    }

    public function show(Supplier $suppliers){
        return inertia('Supplier/Show',[
            'suppliers' =>$suppliers
        ]);
    }
}
