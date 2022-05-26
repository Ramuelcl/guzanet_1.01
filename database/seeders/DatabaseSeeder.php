<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CursoSeeder;
use Database\Seeders\ColorsSeeder;
use Database\Seeders\TablasSeeder;
use Database\Seeders\TelefonosSeeder;
 use Database\Seeders\DireccionsSeeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {// usando Storage::
        $folders=['images','icons', 'avatars', 'cursos','posts'];
        foreach ($folders as $folder) {
            if (Storage::exists('\\public\\'.$folder)) {
                Storage::deleteDirectory('\\public\\'.$folder);
            }
            Storage::makeDirectory('\\public\\'.$folder);
        }
        Storage::copy($folder, '\\public\\banca.yaml');
        dd(public_path(), public_path("\\images"), public_path("storage2"), storage_path(), env('APP_URL').'/public/storage', $folders, $folder);

        $this->call([
            RoleSeeder::class,
            // CursoSeeder::class,
            UserSeeder::class,
            DireccionSeeder::class,
            TelefonoSeeder::class,
            ColorSeeder::class,
            TablaSeeder::class,
            BancaSeeder::class,
            CompteSeeder::class,
            MouvementSeeder::class,
            ]);
        // \App\Models\User::factory()->create();
    }
}
