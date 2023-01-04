<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuariosModel extends Model
{
    use HasFactory;

    public $table = "usuarios";
    public $timestamps = false;
    public $fillable = ["email", "nome", "passwd_snh", "cpf"];

    public function usuarios_info()
    {
        return $this;
    }

}
