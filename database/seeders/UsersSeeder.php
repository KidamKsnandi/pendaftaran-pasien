<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Spesialis;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Pasien";
        $adminRole->save();

        $dokterRole = new Role;
        $dokterRole->name = "dokter";
        $dokterRole->display_name = "Dokter";
        $dokterRole->save();

        // Membuat sample admin
        $admin = new User;
        $admin->name = "Admin Kidam";
        $admin->email = "kidam@gmail.com";
        $admin->password = bcrypt("kidam1234");
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat sample dokter
        $dokter = new User;
        $dokter->name = "Admin Akbar";
        $dokter->email = "akbar@gmail.com";
        $dokter->password = bcrypt("akbar1234");
        $dokter->save();
        $dokter->attachRole($dokterRole);

        $spesialis1 = Spesialis::create(['nama_spesialis' => 'Mata', 'akomodasi' => '30']);
        $spesialis2 = Spesialis::create(['nama_spesialis' => 'Gigi', 'akomodasi' => '30']);
        $spesialis3 = Spesialis::create(['nama_spesialis' => 'Bedah', 'akomodasi' => '30']);

        $dokter1 = Dokter::create(['id_spesialis' => $spesialis1->id, 'id_user' => $dokter->id,
                     'nama_dokter' => 'Akbar Ginanjar', 'shift' => 'pagi', 'foto' => 'coba.png']);
        $dokter2 = Dokter::create(['id_spesialis' => $spesialis2->id, 'id_user' => $dokter->id,
                     'nama_dokter' => 'Akbar', 'shift' => 'siang', 'foto' => 'coba2.png']);
    }
}
