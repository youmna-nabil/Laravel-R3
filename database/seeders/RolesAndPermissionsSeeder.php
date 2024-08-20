<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $ArrayOfPermissionsNames = [
            ''


        ];

        $permissions = collect($ArrayOfPermissionsNames)->map(function($permissions){
            return ['name'=> $permissions, 'guard'=> 'web'];
        }); 
        Permission::insert( $permissions->toArray());

        $role = Role::create(['name'=>'super admin'])->givePermissionTo($ArrayOfPermissionsNames);

    }
}
