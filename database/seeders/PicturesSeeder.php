<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        DB::table('pictures')->insert([
            'name' => 'Swimming Pool',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Restaurant',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Bar',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Spa',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Gym',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Meeting Room',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Bedroom',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);


        DB::table('pictures')->insert([
            'name' => 'Bathroom',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Living Room',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Kitchen',
            'path' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/461795355.jpg?k=194b8762fe4ff926f1004d07aa6e098d9b5be973fe7b626cecfcac458da4cd2f&o=&hp=1',
        ]);

        DB::table('pictures')->insert([
            'name' => 'Hero',
            'path' => 'https://www.travelmanagers.com.au/wp-content/uploads/2023/06/AdobeStock_286563877-1.jpeg',
        ]);
    }
}
