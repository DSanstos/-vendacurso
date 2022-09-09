<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuariosModel;
use App\Models\usuariosInfoModel;
use App\Models\LinksPagModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\ObrigadoMail;
use Illuminate\Support\Facades\Crypt;

class InputController extends Controller
{
    public function inscrever(Request $request)
        {
            $request->validate([
                "email"=> "required|email",
                "nome"=> "required||max:100|min:3",
            ],
            [
                "email.required"=> "Por favor digite um e-mail válido",
                "nome.required"=> "Por favor digite um com mais de 2 letras"
            ]);
            $usuarios = new usuariosModel;
            $usuariosinfo = new usuariosInfoModel;
            $link = LinksPagModel::where("pago", false)->first();
            try {
                    $usuarios->email = ltrim($request->input("email"));
                    $usuarios->nome  = ltrim($request->input("nome"));
                    $usuarios->passwd_snh  = base64_encode(md5(sha1($request->input("email")
                    .$request->input("nome"))));
                    $usuarios->save();
                    $usuariosinfo->usuario = $usuarios->id;
                    $usuariosinfo->save();
                    $link->aluno = $usuarios->id;
                    $link->save();
                    mail::to($request->input("email"))->send(new ObrigadoMail($request->input("email")));
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                return Redirect::back()->with('error', 'Talvez seu e-mail já esteja cadastrado');
            }     
            return view("bootstrap.obrigado");
        }
    public function UpdatePassword (Request $request)
    {
        $request->validate([
            "confirm0"=> "required",
            "confirm1"=> "required",
        ]);
        if($request->input("confirm0") == $request->input("confirm1")){
            usuariosModel::where("email", $request->input("mailuser"))
            ->update([
                "passwd_snh" => Crypt::encryptString($request->input("confirm0"))
            ]);    
        };
    }
}
