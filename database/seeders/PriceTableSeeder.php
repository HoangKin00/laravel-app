<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            ['name' => 'Bấm mí Hàn Quốc đa điểm', 'preferential' => '20% (Giảm 40% khi kết hợp chỉnh sụp mí bẩm sinh/ nâng cung mày)', 'price' => '9', 'promotional' => '7,2', 'service_id' => '1'],
        ];
        foreach ($prices as $price) {
            DB::table('prices')->insert($price);
        }
    }
}
