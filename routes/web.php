<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::resource('produtos', ProdutoController::class);




// Aqui usamos group para substituir o prefixo admin nas rotas
/*Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function(){
        return "dashboard";
    });

    Route::get('users', function(){
        return "users";
    });

    Route::get('clientes', function(){
        return "clientes";
    });
});*/



//Aqui criamos várias rotas e redirecionamos rotas para outras rotas
/*Route::any('/any', function() {
    return "Permite todo tipo de acesso http (put, post, put, delete)";
});

Route::match(['put', 'delete'],'/match', function() {
    return "Permite apenas acessos definidos";
});
Route::get('/produto/{id}/{cat?}', function($id, $cat = '') {
    return "O id do produto é:".$id."<br>"."A categoria é:".$cat;
});

Route::redirect('/sobre','/empresa');
Route::view('/empresa','site/empresa');

Route::get('/news', function() {
    return view('news');
})->name('noticias');

Route::get('/novidades', function() {
    return redirect()->route('noticias');
});   */