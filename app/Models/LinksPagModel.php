<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinksPagModel extends Model
{
    use HasFactory;
    public $table = "linksPagamento";
    public $fillable = ["link", "aluno"];
    public $timestamps = false;
}
