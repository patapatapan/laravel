<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cgy::truncate(); //清空所有資料,並重置主鍵
        $faker = Factory::create('zh_TW');

        /*for ($i = 1; $i <= 20; $i++) {
        Cgy::create(['title' => $faker->realText(20), 'enabled' => $faker->randomElement([true, false]), 'enabled_at' => Carbon::createFromFormat('Y-m-d', $faker->date)]);
        }*/

        Cgy::factory()->times(100)->create();

    }
}
