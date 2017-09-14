<?php

use Illuminate\Database\Seeder;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
        	['name' => 'Văn hoá', 'is_major' => 1],
        	['name' => 'Xã hội', 'is_major' => 1],
        	['name' => 'Thể thao', 'is_major' => 1],
        	['name' => 'Du lịch', 'is_major' => 1],
        	['name' => 'Sức khoẻ', 'is_major' => 1],
        ];

        DB::table('categories')->insert($cates);
    }
}
