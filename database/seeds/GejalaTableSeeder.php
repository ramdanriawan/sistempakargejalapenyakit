<?php

use Illuminate\Database\Seeder;
use App\Models\Gejala;

class GejalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gejala::create([
            'penyakit_id' => 1,
            'keterangan' => 'kepala anda merasakan panas?',
        ]);

        Gejala::create([
            'penyakit_id' => 1,
            'keterangan' => 'Kepala anda merasakan pusing?',
        ]);

        Gejala::create([
            'penyakit_id' => 1,
            'keterangan' => 'Anda merasakan batuk batuk?',
        ]);

        Gejala::create([
            'penyakit_id' => 1,
            'keterangan' => 'Anda merasakan flue?',
        ]);

        Gejala::create([
            'penyakit_id' => 1,
            'keterangan' => 'Anda nafsu makan saat ini?',
        ]);
    }
}
