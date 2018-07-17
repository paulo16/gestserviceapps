<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ServicesTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
        $this->call(EtatspanneTableSeeder::class);
         $this->call(LocauxTableSeeder::class);
         $this->call(AppareilsTableSeeder::class);
         $this->call(PannesTableSeeder::class);
         $this->call(EtatsdemandeTableSeeder::class);
         $this->call(DemandesTableSeeder::class);

    }
}
