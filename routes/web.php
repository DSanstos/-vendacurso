<?php

use Illuminate\Support\Facades\Route;
use  Illuminate\Support\Facades\Mail;
use App\Mail\obrigadoNotification;
use Illuminate\Support\Facades\Session;

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
    if(isset($_SESSION["usermail"]))
        {
            return view("bootstrap.logued");
        } else {
            return view('bootstrap.landing2');
        }
    
});
Route::get('logout', function(){
    unset($_SESSION["usermail"]);
    return redirect('/');
});
Route::get('beneficios', function () {
    return view('cheatsheet.index');
});
Route::get('reserva', function () {
    return view('bootstrap.inscricao');
});
Route::post('input', [App\Http\Controllers\InputController::class, "inscrever"]);
Route::post('auth', [App\Http\Controllers\InputController::class, "loginckeck"]);

Route::get('testeok', function () {
    return view("bootstrap.finalizado");
});
Route::get("ativacao/{link}", function($link){
    $hash = str_replace(['"', '[', ']', '"%5B"', '%5B"'], "", $link);
    $quant = App\Models\usuariosModel::where("passwd_snh", $hash)
    ->where("active", false)->count();
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
//rotas de teste
Route::get("new", function(){
    return view("bootstrap.landingpage");
});
Route::get("teste", function(){
    return view("bootstrap.obrigado")->with(["linkId"=>"#"]);
});
Route::get("tokenbb", function(){
    //$bb = new App\Http\Controllers\BancoController;
    //return $bb->getToken();
    return view("bootstrap.logued");
});
