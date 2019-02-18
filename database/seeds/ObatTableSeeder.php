<?php

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Obat::create([
            'penyakit_id' => 1,
            'range' => 50,
        ]);
    }
}
