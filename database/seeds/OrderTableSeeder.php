<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['user_id'=>'2','shipping_id'=>'1','delivery_price'=>'2.00','total'=>'12.00','grand_total'=>'14.00','status'=> false]
        ]);
    }
}
