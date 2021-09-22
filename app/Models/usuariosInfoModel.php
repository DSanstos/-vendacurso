<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuariosInfoModel extends Model
{
    use HasFactory;
    public $table = 'usuarios_info';
    public $timestamps = false;
    public $fillable = [
        "usuario",
        "estado",
        "cidade",
        "bairro",
        "logradouro",
        "numero",
        "complemento",
        "cep"
    ];
}
