<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VagasCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $table = 'vagasCurso';
    public function up()
    {
        $sql = 'create table vagasCurso(
            id int auto_increment primary key,
            inscrito bigint,
            foreign key(inscrito) references usuarios_info (id)
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
