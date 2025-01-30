<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Daftar roles
        $roles = ['admin', 'petugas'];

        // Buat role jika belum ada
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        // Daftar permissions
        $permissions = [
            'view dashboard',
            'manage users',
            'manage complaints',
        ];

        // Buat permission jika belum ada
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // Tetapkan permission ke role admin
        $adminRole = Role::findByName('admin', 'web');
        $adminRole->givePermissionTo($permissions);

        // Role petugas hanya bisa mengelola complaints
        $petugasRole = Role::findByName('petugas', 'web');
        $petugasRole->givePermissionTo('manage complaints');

        echo "Roles and permissions seeded successfully.\n";
    }
}
