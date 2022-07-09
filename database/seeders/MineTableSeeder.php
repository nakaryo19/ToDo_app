<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mine')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('mine')->insert([
           'name' => 'サンプル太郎',
           'age' => '20',
        ]);

        DB::table('mine')->insert([
            'name' => 'サンプル2',
            'age' => '25',
         ]);

         DB::table('mine')->insert([
            'name' => 'サンプル3',
            'age' => '30',
         ]);

         DB::table('mine')->insert([
            'name' => 'サンプル4',
            'age' => '30',
         ]);

         DB::table('mine')->insert([
            'name' => 'サンプル5',
            'age' => '40',
         ]);
    }
}
