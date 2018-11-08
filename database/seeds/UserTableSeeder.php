<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        //Super Admin
        $superAdmin = new \App\User();
        $superAdmin->name = 'Mr. Super Admin';
        $superAdmin->email = 'super.admin@gmail.com';
        $superAdmin->password = bcrypt('admin1234');
        $superAdmin->ic_number = '800800808888';
        $superAdmin->phone_number = '0198899776';
        $superAdmin->role = 'super_admin';
        $superAdmin->avatar = '/images/user/super_admin.png';
        $superAdmin->status = 'active';
        $superAdmin->save();

        //User
        $superAdmin = new \App\User();
        $superAdmin->name = 'Mr. User';
        $superAdmin->email = 'user@gmail.com';
        $superAdmin->password = bcrypt('user1234');
        $superAdmin->ic_number = '999999999';
        $superAdmin->phone_number = '0198899776';
        $superAdmin->role = 'user';
        $superAdmin->avatar = '/images/user/default.png';
        $superAdmin->status = 'active';
        $superAdmin->save();
    }
}
