<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Eager to Learn',
                'slug' => 'eager-to-learn',
                'price' => 300,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Want to Learn',
                'slug' => 'want-to-learn',
                'price' => 150,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // 1st method
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }

        // 2nd method
        Camp::insert($camps);
    }
}
