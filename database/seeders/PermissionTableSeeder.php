<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Create permissions
        $permissions = [
            //role
            'list-role',
            'create-role',
            'edit-role',
            'delete-role',

            //permission
            'list-permission',
            'create-permission',
            'edit-permission',
            'delete-permission',

            //user
            'list-user',
            'create-user',
            'edit-user',
            'delete-user',

            //branch
            'list-branch',
            'create-branch',
            'edit-branch',
            'delete-branch',

            //banner
            'list-banner',
            'create-banner',
            'edit-banner',
            'delete-banner',


            //about-us
            'list-about-us',
            'create-about-us',
            'edit-about-us',
            'delete-about-us',


            //video
            'list-video',
            'create-video',
            'edit-video',
            'delete-video',


            //profile
            'list-profile',
            'edit-profile',
            'delete-profile',


            //setting
            'update-setting',

            //dashboard
            'dashboard',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission,'guard_name' => 'web']);
        }

        $role = Role::findByName('Super Admin');
        $role->givePermissionTo(Permission::all());
    }
}
