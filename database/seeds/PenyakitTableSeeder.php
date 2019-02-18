<?php

use Illuminate\Database\Seeder;
use App\Models\Penyakit;

class PenyakitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Penyakit::create([
            'nama' => 'demam'
            
        ]);
    }
}
