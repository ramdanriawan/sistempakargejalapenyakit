<?php

use Illuminate\Database\Seeder;
use App\Models\Tested;

class TestedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tested::create([
            'tester_id' => 1,
            'hasil' => 90,
            'keterangan' => 'Parah'
        ]);
    }
}
