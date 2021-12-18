<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
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
    }
}
