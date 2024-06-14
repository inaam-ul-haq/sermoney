<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Registration;
class RoleandPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles if they do not exist
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
        if (!Role::where('name', 'user')->exists()) {
            Role::create(['name' => 'user']);
        }

        // Define users with roles
        $usersData =
        [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role' => 'admin',
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role' => 'user',
            ],
        ];

        // Create users and assign roles
        foreach ($usersData as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'email_verified_at' => $userData['email_verified_at'],
            ]);

            // Assign role to user
            if (isset($userData['role'])) {
                $user->assignRole($userData['role']);
                Registration::create([
                    'user_id' => $user->id,
                    'pobox' => $userData['role'] == 'admin' ? null : 'POBox123', // or any other default value
                    'username' => $user->name,
                    'mob_no' => '1234567890',
                    'office_no' => '0987654321',
                    'id_pass' => 'IDPass123',
                    'country' => 'CountryName',
                    'province' => 'ProvinceName',
                    'city' => 'CityName',
                    'company' => 'CompanyName',
                    'del_address' => 'DeliveryAddress',
                    'refrence' => 'Add',
                    'news_platform' => 'Google',
                ]);
            } else {
                throw new \Exception("Role key is missing for user: " . $userData['email']);
            }
        }

    }
}
