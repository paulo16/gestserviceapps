<?php

use Illuminate\Database\Seeder;

class EtatsdemandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10 ; $i++) { 
    		DB::table('etatsdemande')->insert([
    			'name' => str_random(5),
    			'description' => str_random(10),
    		]);
    	}

    }
}
