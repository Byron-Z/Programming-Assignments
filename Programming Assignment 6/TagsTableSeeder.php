<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Story;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      DB::table('story_tag')->delete();
      DB::table('tags')->delete();

      $faker = Faker\Factory::create();
      $limit = 20;
      for ($i = 0; $i < $limit; $i++) {
        DB::table('tags')->insert([
        'value' => $faker->word,
        ]);
      }

      $stories = App\Story::get();
      $array = array();

      for ($i = 0; $i < $limit; $i++) {
        $array[$i] = $i+1;
      }
        
      foreach($stories as $story)
      {
        $story->tags()->attach($faker->randomElements($array, $count = 3));        
      }    

    }
}
