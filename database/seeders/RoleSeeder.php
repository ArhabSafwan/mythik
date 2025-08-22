<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminPermissions=Permission::all();
        $superAdmin = Role::updateOrCreate([
            'name' => 'Super Admin',
        ], [
            'slug' => 'super-admin',
            'status' => 1,
            'delete_able' => 0
        ]);

        // Sync permissions with Super Admin
        $superAdmin->permissions()->sync($adminPermissions->pluck('id'));

        Role::updateOrCreate([
            'name' => 'Admin',
        ], [
            'slug' => 'admin',
            'status' => 1,
            'delete_able' =>0
        ]);

        Role::updateOrCreate([
            'name' => 'Editor',
        ], [
            'slug' => 'editor',
            'status' => 1,
            'delete_able' => 0
        ]);

    }
}
