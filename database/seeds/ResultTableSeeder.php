<?php

use Illuminate\Database\Seeder;
use App\Models\Result;

class ResultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Result::create([
            'tester_id' => 1,
            'gejala_id' => 1,
            'jawaban' => 'tidak',
            'hasil' => 0
        ]);

        Result::create([
            'tester_id' => 1,
            'gejala_id' => 2,
            'jawaban' => 'tidak lagi',
            'hasil' => 0.25
        ]);

        Result::create([
            'tester_id' => 1,
            'gejala_id' => 3,
            'jawaban' => 'sedikit',
            'hasil' => 50
        ]);

        Result::create([
            'tester_id' => 1,
            'gejala_id' => 4,
            'jawaban' => 'sedang',
            'hasil' => 75,
        ]);

        Result::create([
            'tester_id' => 1,
            'gejala_id' => 5,
            'jawaban' => 'parah',
            'hasil' => 100
        ]);
    }
}
