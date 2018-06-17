<?php

use App\Product;
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
        // T-shirts
        for ($i=1; $i <= 3; $i++) {
            Product::create([
                'name' => 'T-shirt '.$i,
                'reference' => 'tshirt-'.$i,
                'price' => 200,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        }

        // Pins
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Pin ' . $i,
                'reference' => 'pin-' . $i,
                'price' => 70,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        }
    }
}
