<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon ;

class EtatspanneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10 ; $i++) { 
    		DB::table('etatspanne')->insert([
    			'name' => str_random(5),
    			'description' => str_random(20),
    		]);
    	}
    }
}
