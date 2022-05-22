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
                'name' => 'LG mobile',
                "price" => "200$",
                "description" => "A smartphone with 4GB RAM and much more feature",
                "category" => "mobile",
                "gallery" => "https://www.lg.com/us/images/cell-phones/md07518564/gallery/desktop-01.jpg"
            ],
            [
                'name' => 'Oppo mobile',
                "price" => "300$",
                "description" => "A smartphone with 8GB RAM and much more feature",
                "category" => "mobile",
                "gallery" => "https://www.godigit.com/content/dam/godigit/directportal/en/contenthm/oppo-a55.jpg"
            ],
            [
                'name' => 'Panasonic TV',
                "price" => "400$",
                "description" => "A smart TV with much more feature",
                "category" => "TV",
                "gallery" => "https://streamtelly.com/wp-content/uploads/2021/01/Change-DNS-Settings-On-Panasonic-Viera-Smart-TV.jpg"
            ],
            [
                'name' => 'Sony TV',
                "price" => "500$",
                "description" => "A TV with much more feature",
                "category" => "TV",
                "gallery" => "https://jupiter.planet.ba/829-medium_default/sony-bravia-led-tv-49-4k-ultra-hd-android-49xh8096.jpg"
            ],
            [
                'name' => 'LG fridge',
                "price" => "250$",
                "description" => "A fridge with much more feature",
                "category" => "fridge",
                "gallery" => "https://www.costco.co.uk/medias/sys_master/images/hd3/h0f/44073949724702.jpg"
            ]
        ]);
    }
}
