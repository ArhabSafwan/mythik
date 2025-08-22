<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dashboardModule = Module::create([
            'name' => 'Dashboard',
            'slug' => 'dashboard',
        ]);
        $userManagementModule = Module::create([
            'name' => 'User Management',
            'slug' => 'user-management',
        ]);
        
        $roleManagementModule = Module::create([
            'name' => 'Role Management',
            'slug' => 'role-management',
        ]);
        
        $moduleManagementModule = Module::create([
            'name' => 'Module Management',
            'slug' => 'module-management',
        ]);
        
        $permissionManagementModule = Module::create([
            'name' => 'Permission Management',
            'slug' => 'permission-management',
        ]);
        
       
        

        // Create Permissions
        $permissions = [
            // Dashboard
            ['name' => 'Access Dashboard', 'module_id' => $dashboardModule->id],

            // User Management
            ['name' => 'Access User', 'module_id' => $userManagementModule->id],
            ['name' => 'Create Users', 'module_id' => $userManagementModule->id],
            ['name' => 'Edit User', 'module_id' => $userManagementModule->id],
            ['name' => 'Delete User', 'module_id' => $userManagementModule->id],

            // Role Management
            ['name' => 'Access Role', 'module_id' => $roleManagementModule->id],
            ['name' => 'Create Role', 'module_id' => $roleManagementModule->id],
            ['name' => 'Edit Role', 'module_id' => $roleManagementModule->id],
            ['name' => 'Delete Role', 'module_id' => $roleManagementModule->id],
            ['name' => 'Assigned Permission', 'module_id' => $roleManagementModule->id],

            // Module Management
            ['name' => 'Access Module', 'module_id' => $moduleManagementModule->id],
            ['name' => 'Create Module', 'module_id' => $moduleManagementModule->id],
            ['name' => 'Edit Module', 'module_id' => $moduleManagementModule->id],
            ['name' => 'Delete Module', 'module_id' => $moduleManagementModule->id],

            // Permission Management
            ['name' => 'Access Permission', 'module_id' => $permissionManagementModule->id],
            ['name' => 'Create Permission', 'module_id' => $permissionManagementModule->id],
            ['name' => 'Edit Permission', 'module_id' => $permissionManagementModule->id],
            ['name' => 'Delete Permission', 'module_id' => $permissionManagementModule->id],
        ];

        // Insert permissions
        foreach ($permissions as $permissionData) {
            Permission::create([
                'name' => $permissionData['name'],
                'module_id' => $permissionData['module_id'],
                'slug' => Str::slug($permissionData['name']), // generate slug from the permission name
            ]);
        }

    }
}
