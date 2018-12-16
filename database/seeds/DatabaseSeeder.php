<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UserRolePermissionTable::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(ShippingTableSeeder::class);
        $this->call(OrderTableSeeder::class);
    }
}
