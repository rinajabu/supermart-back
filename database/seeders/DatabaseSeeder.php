<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Product::create(["category" => "Meat", "name" => "Chicken Wings", "price" => 12, "description" => "chicken wings from a chicken", "picture" => "https://ipcdn.freshop.com/resize?url=https://images.freshop.com/00270874000004/102a1da685c6bda2eb17d7cc9999359c_large.png&width=512&type=webp&quality=80"]);
        // Product::create(["category" => "Dairy", "name" => "Milk", "price" => 3, "description" => "milk from a cow", "picture" => "https://i5.walmartimages.com/asr/3592de4c-2d2d-4285-afbf-f0508775bd58_2.bb23225176016b4d5ce96c4efed80382.jpeg"]);
        // Product::create(["category" => "Fruit", "name" => "Red Delicious Apples", "price" => 1, "description" => "apple from a tree", "picture" => "https://images.heb.com/is/image/HEBGrocery/000325189"]);

        // User::create(["name" => "testing", "email" => "testing@testing.com", "password" => "testing"]);
    }
}
