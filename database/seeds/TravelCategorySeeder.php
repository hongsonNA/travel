<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('travel_category')->get()->count()==0){
            DB::table('travel_category')->insert([
                [
                    'category_id' => 1,
                    'title' => 'Du lịch trong nước',
                    'slug' => 'ddu-lich-trong-nuoc'
                ],
                [
                    'category_id' => 2,
                    'title' => 'Du lịch ngoài nước',
                    'slug' => 'du-lich-trong-nuoc'
                ],
            ]);
        }
    }
}
