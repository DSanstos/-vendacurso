<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LinkpagamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $table = 'linksPagamento';
    public function up()
    {
        $sql = 'create table linksPagamento(
            id int auto_increment primary key,
            link text,
            ident varchar(30) unique,
            pago boolean default false,
            aluno bigint,
            foreign key (aluno) references usuarios(id)
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
        \DB::select("drop table ". $this->table);
    }
}
