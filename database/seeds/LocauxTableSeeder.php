<?php

use Illuminate\Database\Seeder;

class LocauxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=0; $i < 10 ; $i++) { 
    		DB::table('locaux')->insert([
    			'code' => str_random(5),
    			'niveau' => rand(1, 100),
    			'zone' => str_random(10),
    			'designation' => str_random(5),
    			'sol' => str_random(10),
    			'plafonds' => str_random(10),
    			'murs' => str_random(10),
    			'service_id' => rand(1,10),

    		]);
    	}
    }
}
