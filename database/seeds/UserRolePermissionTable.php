<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UserRolePermissionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Get all the permissions form permission table
        $permission = Permission::all();

        //Assign all permissions to admin Role
        $admin_role = Role::findByName('admin');
        $admin_role->givePermissionTo($permission);

        //Give user 'Getoar' the admin Role
        $admin = User::where('name','Getoar')->first();
        $admin->assignRole('admin');

    }
}
