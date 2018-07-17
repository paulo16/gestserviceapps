<?php

use Illuminate\Database\Seeder;

class AppareilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10 ; $i++) { 
    		DB::table('appareils')->insert([
    			'name' => str_random(5),
    			'description' => str_random(20),
    			'local_id' => rand(1,5),
    		]);
    	}
    }
}
