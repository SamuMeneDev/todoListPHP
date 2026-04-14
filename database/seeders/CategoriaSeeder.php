<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria')->insert([
            ["nome_categoria"=>"Estudo", "created_at"=>date("Y-m-d H:i:s"), "updated_at"=>date("Y-m-d H:i:s")],
            ["nome_categoria"=>"Lazer", "created_at"=>date("Y-m-d H:i:s"), "updated_at"=>date("Y-m-d H:i:s")]
        ]);
    }
}
