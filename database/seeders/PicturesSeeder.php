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

        //
    }
}
