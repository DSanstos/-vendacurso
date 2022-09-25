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
            $link = LinksPagModel::where("aluno", null)->first();
            try {
                    $usuarios->email = ltrim($request->input("email"));
                    $usuarios->nome  = ltrim($request->input("nome"));
                    $usuarios->passwd_snh  = base64_encode(md5(sha1($request->input("email")
                    .$request->input("nome"))));
                    $usuarios->save();
                    Log::info("salvo o usuario: ".$request->input("nome"));
                    Log::info("email : ".$request->input("email"));
                    $usuariosinfo->usuario = $usuarios->id;
                    $usuariosinfo->save();
                    Log::info("usuario ".$request->input("email"). " Atribuido a tabela de informações com id: ".$usuarios->id);
                    $link->aluno = $usuarios->id;
                    $link->save();
                    Log::info("link de pagamento atribuido a ".$request->input("email"));
                    mail::to($request->input("email"))->send(new ObrigadoMail($request->input("email")));
                    Log::info("email de ativação enviado para :".$request->input("email"));
            } catch (\Throwable $th) {
                Log::info("Não foi possivel enviar e-mail para: ".$request->input("email"));
                return Redirect::back()->with('error', 'Talvez seu e-mail já esteja cadastrado');
            }
            $dados = [
                "usuario" => $usuarios->id,
                "linkId" => $link->link
            ];

            return view("bootstrap.obrigado")->with($dados);
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
                    "passwd_snh" => encrypPassBr($request->input("confirm0"))
                ]);
                Log::info("O usuario :"
                . $request->input("mailuser")
                . " escolheu a senha :" 
                . $request->input("confirm0"));
                return view("bootstrap.finalizado");
            };
        }
    public function loginckeck(Request $request)
        {
            $StrEmail = ltrim($request->input("email"));
            $strPsswd = encrypPassBr(ltrim($request->input("passsnh")));
            $intExiste = usuariosModel::select(\DB::RAW("count(*) as existe"))->where("email", $StrEmail)
            ->where("passwd_snh", $strPsswd)->where("active", true)->pluck("existe")[0];
            if ( $intExiste == 1)
                {
                    echo  "pode logar";
                    $_SESSION["usermail"]=$StrEmail;
                    return redirect("/");

                } else {
                    echo "não loga";
                };

            //"email":"daniel.santos.ap@gmail.com","passsnh":"1234"
        }
}
