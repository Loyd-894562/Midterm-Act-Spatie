<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        return inertia('Supplier/Index');
    }

    public function create(){
        return inertia('Supplier/Create');
    }
}
