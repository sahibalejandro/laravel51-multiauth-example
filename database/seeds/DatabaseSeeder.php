<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Admin;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('AdminTableSeeder');
        $this->call('UserTableSeeder');

        Model::reguard();
    }
}

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        if(App::environment() == 'local')
        {
            //Delete all records from the admins table
            DB::table('admins')->delete();

            //Create a demo admin user
            Admin::create(
                array(
                    'email'     =>  'admin@admin.be',
                    'password'  =>  Hash::make('admin'),
                    'firstname' =>  'Admin',
                    'lastname'  =>  'Demo',
                    'status'    =>  1
                ));
        }
    }
}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        if(App::environment() == 'local')
        {
            //Delete all records from the users table
            DB::table('users')->delete();

            //Create a demo user
            User::create(
                array(
                    'email'     =>  'user@user.be',
                    'password'  =>  Hash::make('user'),
                    'firstname' =>  'User',
                    'lastname'  =>  'Demo',
                    'status'    =>  1
                ));
        }
    }
}
