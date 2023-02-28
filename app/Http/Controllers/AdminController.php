<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StoreRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index () {

        $products = Product::paginate(4);
        //Compact usa match que vou implementando a partir do php 8, o macth é um método mais limpo do que usa switch
        return view('admin.products',compact('products'));
    }

    // Exibir a página Editar
    public function edit(){
        return view ('admin.product_edit');
    }

    // Vai receber requisição para Inserir os dados que foi colocado no Editar
    public function update(Request $request){
        $dados = $request->all();
        $this->edit();
    }

    // Para exibir a página create
    public function create(){
        return view('admin.create');
    }

    // Vai receber requisição para inserir os dados
    public function store(StoreRequest $request) {       

        /*
        $validar = $request->validated();
        $validar['slug'] = Str::slug($validar['name']);
        DB::table('products')->insert($validar);
        */
        
        
        $validar = $request->validated();
        $validated['slug'] = Str::slug($validar['name']);       
        Product::create($validated);

        redirect('/');
        
    }


}
