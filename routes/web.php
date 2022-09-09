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
    return view('cover.landing');
});
Route::get('beneficios', function () {
    return view('cheatsheet.index');
});
Route::get('reserva', function () {
    return view('bootstrap.inscricao');
});
Route::post('input', [App\Http\Controllers\InputController::class, "inscrever"]);
//Route::post("inscricao/", "App\Http\Controllers\inscricaoController@inscrever");

Route::get("teste/", function(){
    //$user = new App\Models\usuariosModel;
    //return $user->findOrFail(1);

    //return view("bootstrap.pagamento");
    $dados = ["nome"=>"Daniels"];
    $mail = new obrigadoNotification;
    return $mail->with($dados);
});
Route::get('testeok', function () {
    return view('bootstrap.obrigado');
});
Route::get("ativacao/{link}", function($link){
    $hash = str_replace(['"', '[', ']'], "", $link);
    $quant = App\Models\usuariosModel::where("passwd_snh", $hash)->count();
    if($quant!= 0)
        {
            try {
                App\Models\usuariosModel::where("passwd_snh", $hash)
                ->where("active", 0)->update(
                    ["active"=>1]
                );
            } catch (\Throwable $th) {
                return "email já ativado";
            };
            $objPessoa = App\Models\usuariosModel::where("passwd_snh", $hash)->get()->toArray();
            return view("bootstrap.ativado")->with(["dados"=>$objPessoa[0]]);
        };
    return "Email já ativado";
    
});
Route::get("login", function(){
    return view("bootstrap.login");
});
Route::post("uppass", [App\Http\Controllers\InputController::class, "UpdatePassword"]);
