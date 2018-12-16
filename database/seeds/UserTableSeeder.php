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
        //we use 'create' method insead 'insert' because it inserts date on created_at and updated_at
        User::create(['name'=>'Getoar','email'=>'gllalloshi@gmail.com','password'=> bcrypt('geti123')]);
        User::create(['name'=>'Buyer','email'=>'buyer@gmail.com','password'=>bcrypt('buyer123')]);

    }
}
