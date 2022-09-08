<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuariosModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\ObrigadoMail;

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
            try {
                $usuarios->Create([
                    "email" => ltrim($request->input("email")),
                    "nome" => ltrim($request->input("nome")),
                    "passwd_snh" => base64_encode(md5(sha1($request->input("email")
                    .$request->input("nome")
                    ) ) )
                ]);

                mail::to($request->input("email"))->send(new ObrigadoMail($request->input("email")));
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                return Redirect::back()->with('error', 'Talvez seu e-mail já esteja cadastrado');
            }     
            return view("bootstrap.obrigado");
        }  
}
