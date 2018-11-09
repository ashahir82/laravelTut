<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('states')->delete();

        $state = new \App\State();
        $state->name = 'Johor Darul Ta\'zim';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Kedah Darul Aman';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Kelantan Darul Naim';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Malacca';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Negeri Sembilan Darul Khusus';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Pahang Darul Makmur';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Penang';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Perak Darul Ridzuan	';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Perlis Indera Kayangan';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Sabah';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Sarawak';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Selangor Darul Ehsan';
        $state->status = 'active';
        $state->save();

        $state = new \App\State();
        $state->name = 'Terengganu Darul Iman';
        $state->status = 'active';
        $state->save();
    }
}
