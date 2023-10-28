<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = [
            ['id' => 1, 'name' => 'Produto 1', 'description' => 'Descrição do produto 1'],
            ['id' => 2, 'name' => 'Produto 2', 'description' => 'Descrição do produto 2'],
            ['id' => 3, 'name' => 'Produto 3', 'description' => 'Descrição do produto 3'],
        ];
        return view('products.index', ['products' => $products]);
    }

    public function show($id){
        $product = ['id' => $id, 'name' => 'Produto' . $id, 'description' => 'Desccrição do Produto'];
        return view('products.show', ['product' => $product]);
    }
}

