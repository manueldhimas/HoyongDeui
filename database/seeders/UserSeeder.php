<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        $adminData = [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'info@hoyong.com',
            'role' => 'admin',
            'status' => 'Aktif',
            'password' => bcrypt('hoyongdeui'),
        ];

        $admin = User::updateOrCreate(['email' => 'info@hoyong.com'], $adminData);
        $this->tampilkanPesanPenyimpanan($admin, 'Admin');
        $admin->assignRole('Admin');

        // Super Admin
        $superAdminData = [
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'super@hoyong.com',
            'role' => 'Super Admin',
            'status' => 'Aktif',
            'password' => bcrypt('hoyongdeui'),
        ];

        $superAdmin = User::updateOrCreate(['email' => 'super@hoyong.com'], $superAdminData);
        $this->tampilkanPesanPenyimpanan($superAdmin, 'Super Admin');
        $superAdmin->assignRole('Super Admin');

        // Guest
        $guestData = [
            'name' => 'Guest',
            'username' => 'guest',
            'email' => 'guest@hoyong.com',
            'role' => 'Guest',
            'status' => 'Aktif',
            'password' => bcrypt('hoyongdeui'),
        ];

        $guest = User::updateOrCreate(['email' => 'guest@hoyong.com'], $guestData);
        $this->tampilkanPesanPenyimpanan($guest, 'Guest');
        $guest->assignRole('Guest');
    }

    private function tampilkanPesanPenyimpanan($user, $role)
    {
        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $role . ' (' . $user->name . ') telah disimpan.');
        } else {
            $this->command->info('Data User ' . $role . ' (' . $user->name . ') telah diperbarui.');
        }
    }
}
