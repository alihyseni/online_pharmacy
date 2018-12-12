<?php

use Illuminate\Database\Seeder;


class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Brands::insert([
            'name' => 'Bayer',
            'image'=> 'bayer.png',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        \App\Brands::insert([
            'name' => 'Swanson',
            'image'=> 'swanson.png',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        \App\Brands::insert([
            'name' => 'Alkaloid',
            'image'=> 'alkaloid.png',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        \App\Brands::insert([
            'name' => 'Johnson&Johnson',
            'image'=> 'johnson-johnson.png',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        \App\Brands::insert([
            'name' => 'Trepharm',
            'image'=> 'trepharm.png',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);



    }
}
