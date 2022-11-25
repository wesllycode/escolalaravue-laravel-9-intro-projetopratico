<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdutoController extends Controller{ 
    
    public function show(Product $product){         
        return view('produto', [
            'product' => $product,
        ]);    
    }
}
