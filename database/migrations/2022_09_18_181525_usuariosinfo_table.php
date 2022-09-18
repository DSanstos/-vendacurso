<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuariosinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $table = 'usuarios_info';
    public function up()
    {
        $sql = 'create table usuarios_info(
            id bigint auto_increment,
            usuario bigint unique not null,
            estado varchar(2),
            cidade varchar(150),
            bairro varchar(100),
            logradouro varchar(200),
            numero varchar(15),
            complemento varchar(150),
            cep varchar(8),
            primary key(id),
            foreign key(usuario) references usuarios(id)
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
        \DB::select("drop table " .$this->table);
    }
}
