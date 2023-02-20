<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {

        $products = Product::paginate(4);
        return view('admin.products',compact('products'));
    }

    public function edit(){
        return view ('admin.product_edit');
    }
}
