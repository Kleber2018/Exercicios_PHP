<?php

use Illuminate\Database\Seeder;

class AutorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5; $i++){
            DB::table('autors')->insert([
                'nome'=>str_random(5),
                'tarefas_id'=>2
            ]);
        }
    }
}
