<?php

namespace Database\Seeders;

use App\Models\Banca;
use Illuminate\Database\Seeder;

class BancaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banca::factory()->count(3)->create();
    }
}
