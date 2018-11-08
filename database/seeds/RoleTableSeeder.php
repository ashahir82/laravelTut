<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->delete();

        //Super Admin
        $role = new \App\Role();
        $role->name = 'super_admin';
        $role->nick = 'Super Admin';
        $role->status = 'active';
        $role->save();

        //User
        $role = new \App\Role();
        $role->name = 'user';
        $role->nick = 'User Biasa';
        $role->status = 'active';
        $role->save();
    }
}
