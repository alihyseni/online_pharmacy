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
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        \App\Brands::insert([
            'name' => 'Swanson',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        \App\Brands::insert([
            'name' => 'Alkaloid',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        \App\Brands::insert([
            'name' => 'Johnson&Johnson',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        \App\Brands::insert([
            'name' => 'Trepharm',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);



    }
}
