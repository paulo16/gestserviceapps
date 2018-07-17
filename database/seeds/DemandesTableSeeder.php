<?php

use Illuminate\Database\Seeder;

class DemandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$year = rand(2018, 2020);
    	$month = rand(1, 12);
    	$day = rand(1, 28);
    	$date = Carbon::create($year,$month ,$day , 0, 0, 0);

    	for ($i=0; $i < 10 ; $i++) { 
    		DB::table('demandes')->insert([
    			'title' => str_random(5),
    			'details' => str_random(20),
    			'date_cloture' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
    			'etat_id' => rand(1,8),
    			'panne_id' => rand(1,8),
    			'user_id' => 1,
    		]);
    	}

    }
}
