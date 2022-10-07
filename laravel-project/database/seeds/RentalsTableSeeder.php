<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s_date = Carbon::now();
        $s_date = Carbon::parse( $s_date )->timezone('Asia/Tokyo');
        $e_date = $s_date->addDays(3);

        DB::table('rentals')->insert([
            'user_id' => 1,
            'item_id' => 1,
            'start_date' => $s_date,
            'end_date' => $e_date,
            'state' => mt_rand(0, 5), // 値の範囲については下記のコメントを確認してください。
            'is_matching' => mt_rand(0, 1), // TrueかFalseかの2択なので0か1
        ]);
        
        // state: レンタル状況を表す 
        // 0: before_shipping 発送前
        // 1: after_shipping 発送済
        // 2: on_rent 貸出中（貸し出し相手に到着）
        // 3: before_returning 返却の発送前
        // 4: after_returning 返却の発送後
        // 5: finish 終了（貸し出し元に到着）
    }
}
