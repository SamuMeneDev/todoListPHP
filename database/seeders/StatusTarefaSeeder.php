<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class StatusTarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_tarefa')->insert([
            ["status_tarefa"=>"Pendente", "created_at"=>date('Y-m-d H:i:s'), "updated_at"=>date('Y-m-d H:i:s')],
            ["status_tarefa"=>"Finalizada", "created_at"=>date('Y-m-d H:i:s'), "updated_at"=>date('Y-m-d H:i:s')]
        ]);
    }
}
