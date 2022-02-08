<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Samsung 43" Full HD Smart TV N5500 Series 5',
                'price'=>'Rp 4.799.000,00',
                'category'=>'tv',
                'description'=>'Enjoy HD quality pictures and internet access without additional devices using a Samsung Smart TV.',
                'gallery'=>'https://cf.shopee.co.id/file/7ff9db3ff5ab7271ff89b0230c196e34'
            ],
            [
                'name'=>'LG UHD TV 65 inch UK6400 Series IPS 4K Display 4K HDR Smart LED TV',
                'price'=>'Rp 13.899.000,00',
                'category'=>'tv',
                'description'=>'The perfect TV for every day use. It combines the ease of use with the magic remote control and the functionality with WebOS and its wide range of applications.',
                'gallery'=>'https://www.lg.com/sa_en/images/tvs/md05944296/gallery/medium001.jpg'
            ],
            [
                'name'=>'SAMSUNG Fridge Side by Side door RS63R5561B4',
                'price'=>'Rp 20.653.000,00',
                'category'=>'fridge',
                'description'=>'It is an ideal choice for those of you who need a large food storage area. This refrigerator is equipped with the All Around Cooling feature which ensures the cold is more evenly distributed to every corner of the refrigerator',
                'gallery'=>'https://www.bhinneka.com/_next/image?url=https%3A%2F%2Fstatic.bmdstatic.com%2Fpk%2Fproduct%2Fmedium%2F5c9c47df6e9c1.jpg&w=640&q=75'
            ],
            [
                'name'=>'Sharp Fridge SJ-F240G',
                'price'=>'Rp 3.150.000,00',
                'category'=>'fridge',
                'description'=>'This refrigerator has its own advantages. Sharp SJ-F240G is designed with a special fan that makes the refrigerator not produce frost. This refrigerator uses 95 watts of power which is quite energy efficient.',
                'gallery'=>'https://i2.wp.com/ruangharga.com/wp-content/uploads/2018/11/Kulkas-Sharp-SJ-F240G.jpg'
            ],
            
        ]);
    }
}