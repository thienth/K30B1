<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 500; $i++) { 
        	$post = [
    			'title'=> $faker->realText(150),
    			'short_desc' => $faker->realText(190, 2),
    			'content' => $faker->realText(500, 4),
    			'author' => $faker->name,
    			'cate_id' => rand(1, 5)
        	];
        	DB::table('posts')->insert($post);
        }
    }
}
