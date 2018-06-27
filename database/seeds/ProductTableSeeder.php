<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \app\Product([
          'imgPath' => 'https://www.gettyimages.ca/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg',
          'name' => 'birdlets',
          'desc' => 'look at them go it is so fun!',
          'price' => 23.41
        ]);
        $product -> save();

        $product = new \app\Product([
          'imgPath' => 'https://www.w3schools.com/w3css/img_lights.jpg',
          'name' => 'aurora borealets',
          'desc' => 'these are steamed hams, sir',
          'price' => 42.42
        ]);
        $product -> save();

        $product = new \app\Product([
          'imgPath' => 'https://imagejournal.org/wp-content/uploads/bb-plugin/cache/23466317216_b99485ba14_o-panorama.jpg',
          'name' => 'rocklets',
          'desc' => 'the stuff in front confuses me',
          'price' => 0.44
        ]);
        $product -> save();

        $product = new \app\Product([
          'imgPath' => 'https://i2.wp.com/beebom.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg?resize=640%2C426',
          'name' => 'upside down cat',
          'desc' => 'how did this happened?',
          'price' => 666.66
        ]);
        $product -> save();

        $product = new \app\Product([
          'imgPath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZY1hD3he1e8JIARNHqC_MCVs72jmr-ulYK0na5qKVDBWoCzhf',
          'name' => 'squawkerino',
          'desc' => 'in rome they are fearless',
          'price' => 0.01
        ]);
        $product -> save();
    }
}
