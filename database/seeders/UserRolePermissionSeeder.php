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
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
        ];

        $admin = User::create(array_merge([
            'email' => 'adminmain@gmail.com',
            'name' => 'Admin'
        ], $default_user_value));

        $petugas = User::create(array_merge([
            'email' => 'petugas@gmail.com',
            'name' => 'petugas'
        ], $default_user_value));

        $masyarakat = User::create(array_merge([
            'email' => 'masyarakat@gmail.com',
            'name' => 'masyarakat'
        ], $default_user_value));

        
        $role_admin = Role::create(['name' => 'admin']);
        $role_petugas = Role::create(['name' => 'petugas']);
        $role_masyarakat = Role::create(['name' => 'masyarakat']);

        $permission = Permission::create(['name' => 'read role']);
        $permission = Permission::create(['name' => 'create role']);
        $permission = Permission::create(['name' => 'update role']);
        $permission = Permission::create(['name' => 'delete role']);

        $admin->assignRole('admin');
        $petugas->assignRole('petugas');
        $masyarakat->assignRole('masyarakat');
        // DB::beginTransaction();
        // try {
            

        //     DB::commit();
        // } catch (\Throwable $th) {
            DB::rollback();
        // }

        
        // $data = collect([
        //     [
        //         'name' => 'Admin',
        //         'email' => 'adminmain@gmail.com',
        //         'roles' => 'admin',
        //     ],
        //     [
        //         'name' => 'Petugas',
        //         'email' => 'petugas@gmail.com',
        //         'roles' => 'petugas',
        //     ],
        // ]);

        // $data->map(function ($data) {
        //     $name = $data['name'];
        //     $email = $data['email'];
        //     $roles = $data['roles'];
        //     $email_verified_at = now();
        //     $password = bcrypt('000000');

        //     $user = User::query()->updateOrCreate(compact('name', 'email', 'email_verified_at', 'roles', 'password'), compact('name', 'email', 'email_verified_at', 'roles', 'password'));
        //     $user->syncRoles($user->role);
        // });
    }
}
