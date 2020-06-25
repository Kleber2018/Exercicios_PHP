<?php

use Illuminate\Database\Seeder;

class TarefasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5; $i++){
                DB::table('tarefas')->insert([
                    'titulo'=>str_random(10),
                    'status'=> true
                ]);
        }
    }
}
