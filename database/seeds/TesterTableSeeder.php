<?php

use Illuminate\Database\Seeder;
use App\Models\Tester;
use Faker\Provider\id_ID\Person;

class TesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Person $fakerPerson)
    {
        //
        Tester::create([
            'nama' => $fakerPerson->lastNameMale(),
            'umur' => 21,
            'jenis_kelamin' => 'l'
        ]);
    }
}
