<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = "Matheus";
    $idade = 20;

    $arr = [1, 2, 3, 4, 5];
    $nomes = ["Amanda", "Maria", "João"];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissao' => 'programador',
        'arr' => $arr,
        'nomes' => $nomes
]);


});
Route::get('/ex01', function () {
    return view('paz');
});

Route::get('/ex01', function () {
    return view('paz');
});

Route::get('/ex02', function () {
    $mensagens = [
        "Paz no Oriente Médio",
        "A paz é a única forma de nos sentirmos realmente humanos",
        "Não exite um caminho para a paz. A paz é o caminho"
    ];

    return view('paz', ['m' => $mensagens]);
});

Route::get('/ex03', function () {
    $mensagens = [
        "Paz no Oriente Médio",
        "A paz é a única forma de nos sentirmos realmente humanos",
        "Não exite um caminho para a paz. A paz é o caminho"
    ];
    $randomMessage = $mensagens[array_rand($mensagens)];
    return view('paz', ['m' => $randomMessage]);
});

Route::get('/ex04', function () {
    $mensagens = [
        "Paz no Oriente Médio",
        "A paz é a única forma de nos sentirmos realmente humanos",
        "Não exite um caminho para a paz. A paz é o caminho"
    ];
    $randomMessage = $mensagens[array_rand($mensagens)];
    $isUserLoggedIn = true;
    return view('paz', ['m' => $randomMessage, 'usuario' => $isUserLoggedIn]);
});

Route::get('/ex05', function () {
    return view('inicio');
});

Route::get('/products', function () {
    $products = ['Produto 1', 'produto 2', 'produto 3'];
    return view('product', ['products' => $products]);
});

//Exercicio 7
Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::post('/processContactForm', function () {
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    return redirect()->route('contact')->
    with('message', 'Mensagem enviada com sucesso!');
})->name('processContactForm');

//ex09
use App\Http\Controllers\ProductController;

Route::get('/products2', [ProductController::class, 'index'])->name('products.index');
Route::get('/products2/{id}', [ProductController::class, 'show'])->name('products.show');