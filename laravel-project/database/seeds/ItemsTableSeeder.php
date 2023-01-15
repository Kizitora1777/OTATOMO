<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item_name = Str::random(5);

        DB::table('items')->insert([
            'user_id' => 1,
            'name' => $item_name,
            'description' => "This is ${item_name}",
            'price' => mt_rand(1, 10000),
            'collateral' => mt_rand(1, 10000)
        ]);
    }
}
