<?php

namespace Database\Seeders;

use App\Models\Spesialis;
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
        $this->call([
            UsersSeeder::class
        ]);

        $spesialis1 = Spesialis::create(['nama_spesialis' => 'Mata', 'akomodasi' => '30']);
        $spesialis2 = Spesialis::create(['nama_spesialis' => 'Gigi', 'akomodasi' => '30']);
        $spesialis3 = Spesialis::create(['nama_spesialis' => 'Bedah', 'akomodasi' => '30']);
    }
}
