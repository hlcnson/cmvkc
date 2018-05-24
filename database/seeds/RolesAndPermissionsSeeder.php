<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');
        
        // Tạo permission
        Permission::create(['name' => Config::get('custom.administrativePermissionName')]);
        // Permission::create(['name' => 'delete articles']);
        // Permission::create(['name' => 'publish articles']);
        // Permission::create(['name' => 'unpublish articles']);

        // Tạo role và gán permission
        $role = Role::create(['name' => Config::get('custom.superAdministratorRoleName')]);
        $role->givePermissionTo(Permission::all());

        // $role = Role::create(['name' => 'moderator']);
        // $role->givePermissionTo(['publish articles', 'unpublish articles']);

        // $role = Role::create(['name' => 'super-admin']);
        // $role->givePermissionTo(Permission::all());
        
    }
}
