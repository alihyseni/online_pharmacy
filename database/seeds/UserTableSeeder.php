<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(['name'=>'Getoar','email'=>'gllalloshi@gmail.com','password'=>'geti123']);
        User::create(['name'=>'Buyer','email'=>'buyer@gmail.com','password'=>'buyer123']);

    }
}
