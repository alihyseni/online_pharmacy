<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class ShippingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('orders')->insert([
//            ['user_id'=>'2','order_detail'=>'1','shipping_id'=>'1','delivery_price'=>'2.00','total'=>'12.00','grand_total'=>'14.00','status'=> 'boolean']
//        ]);
        DB::table('shipping')->insert([
            ['user_id'=>'1','country_id'=>'1','firstname'=>'Buyer','lastname'=>'Buyer','address'=>'Str.Shaip Kamberi, Nr.33','Province'=>'Pristina','number'=>'044123456']
        ]);
    }
}
