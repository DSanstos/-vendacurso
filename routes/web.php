<?php

use Illuminate\Support\Facades\Route;
use  Illuminate\Support\Facades\Mail;
use App\Mail\obrigadoNotification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cover.index');
});
Route::post("inscricao/", "App\Http\Controllers\inscricaoController@inscrever");

Route::get("teste/", function(){
    //$user = new App\Models\usuariosModel;
    //return $user->findOrFail(1);

    //return view("bootstrap.pagamento");
    $dados = ["nome"=>"Daniels"];
    $mail = new obrigadoNotification;
    return $mail->with($dados);
});
