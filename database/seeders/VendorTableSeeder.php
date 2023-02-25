<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\Product;
use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::factory()->count(35000)->has(Product::factory()->count(3), 'product')->create();
    }
}
