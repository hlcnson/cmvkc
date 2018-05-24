<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = App\User::create([
            'name' => 'thanh',
            'email' => 'h_h_thanh@yahoo.com',
            'phone' => '0919999999',
            'password' => '123456',
            'api_token' => bin2hex(openssl_random_pseudo_bytes(30))
        ]);

        // $user->givePermissionTo(Config::get('custom.administrativePermissionName'));
        $user->assignRole(Config::get('custom.superAdministratorRoleName'));
    }
}
