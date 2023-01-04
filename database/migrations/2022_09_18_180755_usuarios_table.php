<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $table = "usuarios";
    public function up()
    {
        $sql = 'create table usuarios(
            id bigint auto_increment,
            email varchar(75) unique,
            nome varchar(100),
            active boolean default false,
            passwd_snh text,
            mostrar enum("email", "nome"),
            cpf varchar(20),
            primary key(id)
        )engine=innodb charset=utf8;';
        \DB::select($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::select("drop table ".$this->table);
    }
}
