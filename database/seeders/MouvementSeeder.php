<?php

namespace Database\Seeders;

use App\Models\Mouvement;
use Illuminate\Database\Seeder;

class MouvementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mouvement::factory()->count(5)->create();
    }
}
