<?php

namespace Database\Seeders;

use DB;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = collect([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'roles' => 'admin',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Petugas',
                'email' => 'petugas@example.com',
                'roles' => 'petugas',
                'password' => bcrypt('password123'),
            ],
        ]);

        // Proses setiap user
        $data->each(function ($item) {
            // Buat atau perbarui user berdasarkan email
            $user = User::updateOrCreate(
                ['email' => $item['email']],
                [
                    'name' => $item['name'],
                    'password' => $item['password'],
                    'roles' => $item['roles']
                ]
            );

            // Tetapkan role ke user
            // $user->syncRoles($item['roles']);
        });









         // $admin = User::create(array_merge([
        //     'email' => 'adminmain@gmail.com',
        //     'name' => 'Admin'
        // ], $default_user_value));

        // $petugas = User::create(array_merge([
        //     'email' => 'petugas@gmail.com',
        //     'name' => 'petugas'
        // ], $default_user_value));

        // $masyarakat = User::create(array_merge([
        //     'email' => 'masyarakat@gmail.com',
        //     'name' => 'masyarakat'
        // ], $default_user_value));

        
        // $role_admin = Role::create(['name' => 'admin']);
        // $role_petugas = Role::create(['name' => 'petugas']);
        // $role_masyarakat = Role::create(['name' => 'masyarakat']);

        // $permission = Permission::create(['name' => 'read role']);
        // $permission = Permission::create(['name' => 'create role']);
        // $permission = Permission::create(['name' => 'update role']);
        // $permission = Permission::create(['name' => 'delete role']);

        // $role_admin->givePermissionTo('read role');
        // $role_admin->givePermissionTo('create role');
        // $role_admin->givePermissionTo('update role');
        // $role_admin->givePermissionTo('delete role');

        // $admin->assignRole('admin');
        // $petugas->assignRole('petugas');
        // $masyarakat->assignRole('masyarakat');
        // DB::beginTransaction();
        // try {
            

        //     DB::commit();
        // } catch (\Throwable $th) {
            // DB::rollback();
        // }
    }
}
