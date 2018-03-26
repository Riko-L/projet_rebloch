<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        User::create(array(
            'firstname' => 'Eric',
            'lastname' => 'LE DEVEDEC',
            'genre' => 'male',
            'email' => 'ledevedec.eric@gmail.com',
            'password' => Hash::make('*BadBeat74940*&&'),
        ));

        User::create(array(
            'email' => 'george@foreman.com',
            'firstname' => 'George',
            'lastname' => 'Foreman',
            'genre' => 'male',
            'password' => Hash::make('georgeforeman')
        ));

        User::create(array(
            'email' => 'tony@thetiger.com',
            'firstname' => 'Tony',
            'lastname' => 'Tiger',
            'genre' => 'male',
            'password' => Hash::make('tonytiger')
        ));

        User::create(array(
            'email' => 'fred@flintstone.com',
            'firstname' => 'Fred',
            'genre' => 'male',
            'lastname' => 'Flintstone',
            'password' => Hash::make('fredflintstone')
        ));
    }
}
