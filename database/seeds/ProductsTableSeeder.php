<?php

use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Products::insert([
            'brands_id'=>'1',
            'name' => 'Paracetamol',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '0.60',
            'image'=>'Paracetamol.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

            ]);

        \App\Products::insert([
            'brands_id'=>'2',
            'name' => 'Vitamin B12',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '1.20',
            'image'=>'vitamin-b6.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'2',
            'name' => 'Vitamin B6',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '1.20',
            'image'=>'Vitamin-B6.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'4',
            'name' => 'Calcium',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '1.80',
            'image'=>'calcium.png',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'4',
            'name' => 'Vitamin C',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '4.50',
            'image'=>'vitamin-c.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'3',
            'name' => 'Zinc',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '1.20',
            'image'=>'zinc.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'2',
            'name' => 'Magnesium',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '3.20',
            'image'=>'magnesium.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'1',
            'name' => 'Aspirin',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '5.10',
            'image'=>'Aspirin.png',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'3',
            'name' => 'Iron',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '3.20',
            'image'=>'iron.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'3',
            'name' => 'Vitamin A',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '2.40',
            'image'=>'vitamin-a.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'4',
            'name' => 'Vitamin E',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '1.10',
            'image'=>'vitamin-e.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'1',
            'name' => 'B-complex',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '7.10',
            'image'=>'b-complex.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        \App\Products::insert([
            'brands_id'=>'4',
            'name' => 'Creatine',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book . It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged . It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .',
            'ingredients'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'usage'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price'=> '10.50',
            'image'=>'creatine.jpg',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

    }
}
