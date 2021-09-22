<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\usuariosModel;
use  App\Models\usuariosInfoModel;

class inscricaoController extends Controller
{
    public function inscrever()
    {
        $usuario = new usuariosModel;
            $usuario->email = $_POST["inputEmail"];
            $usuario->nome = $_POST["inputNome"];
            try {
                $usuario->save();
            } catch (\Throwable $th) {
                $user = \DB::table("usuarios")->select("email")->where("email", "=", $usuario->email)->get()->toArray();
                if ($user[0]->email != ''){
                    return view("bootstrap.pagamento");
                } else {
                    return redirect()->back();
                };
            }
        $usuarioInfo = new usuariosInfoModel;
            $usuarioInfo->usuario = $usuario->id;
            $usuarioInfo->estado = $_POST["inputEstado"];
            $usuarioInfo->cidade = $_POST["inputCidade"];
            $usuarioInfo->logradouro = $_POST["inputStreet"];
            $usuarioInfo->complemento = $_POST["inputComplemt"];
            $usuarioInfo->numero = $_POST["inputNumero"];
            $usuarioInfo->cep = str_replace('-', '', $_POST["inputCep"]);
            $usuarioInfo->bairro = $_POST["inputBairro"];
            $usuarioInfo->save();
        return view("bootstrap.pagamento");
    }
}
