<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stories')->delete();

      $faker = Faker\Factory::create();
  		$limit = 20;
  		for ($i = 0; $i < $limit; $i++) {
   			DB::table('stories')->insert([
        'location_id' => $faker->numberBetween($min = 1, $max = 20),
   			'title' => $faker->word,
   			'story' => $faker->text($maxNbChars = 500),
   			'published' => $faker->boolean($chanceOfGettingTrue = 50),
   			]);
  		}
    }
}
