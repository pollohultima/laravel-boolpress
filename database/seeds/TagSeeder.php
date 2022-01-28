<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTag = new Tag();
            $newTag->name = $faker->word();
            $newTag->slug = Str::slug($newTag->name);
            $newTag->save();
        }
    }
}