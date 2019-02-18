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
        
        $this->call(PenyakitTableSeeder::class);
        $this->call(TesterTableSeeder::class);
        $this->call(ObatTableSeeder::class);
        $this->call(GejalaTableSeeder::class);
        $this->call(ResultTableSeeder::class);
        $this->call(TestedTableSeeder::class);
    }
}
