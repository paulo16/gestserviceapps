<?php

use Illuminate\Database\Seeder;

class PannesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10 ; $i++) { 
    		DB::table('pannes')->insert([
    			'title' => str_random(5),
    			'description' => str_random(20),
    			'etat_id' => rand(1,6),
    			'local_id' => rand(1,6),
    			'appareil_id' => rand(1,10),
    			'category_id' => rand(1,10),
    		]);
    	}
    }
}
