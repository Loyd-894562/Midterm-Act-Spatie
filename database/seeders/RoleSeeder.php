<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin     =   Role::create(['name' =>'admin']);
        $role_manager   =   Role::create(['name' =>'student']);
     

        $manage_supplier = Permission::create(['name' => 'manage medicine']);
        $manage_product = Permission::create(['name' => 'manage patient']);
        
       

        $permission_admin =  [ $manage_supplier];

        $permission_manager =  [$manage_product ];

        $role_admin->syncPermissions($permission_admin);
        $role_manager->syncPermissions($permission_manager);

        User::find(1)->assignRole($role_admin);
        User::find(2)->assignRole($role_manager);
     
    }
}
