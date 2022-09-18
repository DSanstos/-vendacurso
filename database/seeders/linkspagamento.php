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
        ("https://userede.com.br/pagamentos/pt/bkjecgj8"),
        ("https://userede.com.br/pagamentos/pt/oq1q6k4f"),
        ("https://userede.com.br/pagamentos/pt/gk6k0gpg"),
        ("https://userede.com.br/pagamentos/pt/jk3ql54j"),
        ("https://userede.com.br/pagamentos/pt/lz2p33lt"),
        ("https://userede.com.br/pagamentos/pt/bbjecgk5"),
        ("https://userede.com.br/pagamentos/pt/gg6k0h02"),
        ("https://userede.com.br/pagamentos/pt/esa2ajc9"),
        ("https://userede.com.br/pagamentos/pt/gk6k0h06"),
        ("https://userede.com.br/pagamentos/pt/aw152ei3h"), 
        ("https://userede.com.br/pagamentos/pt/dhcbcd0h"),
        ("https://userede.com.br/pagamentos/pt/je3qm9f4"),
        ("https://userede.com.br/pagamentos/pt/cnfdb0je"),
        ("https://userede.com.br/pagamentos/pt/btjefhgk"),
        ("https://userede.com.br/pagamentos/pt/oi1q7aih"),
        ("https://userede.com.br/pagamentos/pt/jk3qm9me"),
        ("https://userede.com.br/pagamentos/pt/ln2p4263"),
        ("https://userede.com.br/pagamentos/pt/ns21s4c2"),
        ("https://userede.com.br/pagamentos/pt/or1q7ar3"),
        ("https://userede.com.br/pagamentos/pt/hd5gb52h"),
        ("https://userede.com.br/pagamentos/pt/pk1im03p"),
        ("https://userede.com.br/pagamentos/pt/pk1im03p"),
        ("https://userede.com.br/pagamentos/pt/lk2p4bei"),
        ("https://userede.com.br/pagamentos/pt/kk39aian"),
        ("https://userede.com.br/pagamentos/pt/os1q7icl");';
        \DB::select($sql);
    }
}
