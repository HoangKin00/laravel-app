<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['name' => 'Cắt Mí'],
            ['name' => 'Nâng Mũi'],
            ['name' => 'Nâng ngực'],
            ['name' => 'Hàm Mặt'],
            ['name' => 'Giảm Mỡ'],
            ['name' => 'Cấy Mỡ'],
            ['name' => 'Trẻ Hóa Da'],
            ['name' => 'Tạo Hình Môi'],
            ['name' => 'Căng Da (PT)'],
        ];
        foreach ($services as $service) {
            DB::table('services')->insert($service);
        }
    }   
}
