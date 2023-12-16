<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'الرياض',
            ],
            [
                'name' => 'مكة المكرمة',
            ],
            [
                'name' => 'المدينة المنورة',
            ],
            [
                'name' => 'القصيم',
            ],
            [
                'name' => 'المنطقة الشرقية',
            ],
            [
                'name' => 'عسير',
            ],
            [
                'name' => 'تبوك',
            ],[
                'name' => 'حائل',
            ],
            [
                'name' => 'الحدود الشمالية',
            ],
            [
                'name' => 'جازان',
            ],
            [
                'name' => 'نجران',
            ],
            [
                'name' => 'الباحة',
            ],[
                'name' => 'الجوف',
            ]

        ];

        foreach ($data as $get)
        {
            City::updateOrCreate($get);
        }
    }
}
