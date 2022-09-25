<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class linkspagamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = 'insert into linkspagamento (link) values 
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb"),
        ("https://cielolink.com.br/3DTJIUb")';
        \DB::select($sql);
    }
}
