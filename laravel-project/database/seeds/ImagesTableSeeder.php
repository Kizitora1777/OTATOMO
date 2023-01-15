<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'item_id' => 1,
            'image_url' => 'http://'.Str::random(5).'.com',
        ]);
    }
}
