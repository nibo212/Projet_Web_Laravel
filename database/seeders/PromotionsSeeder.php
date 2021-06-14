<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PromotionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
          [
            'promo_id' => 1,
            'promo' => 'A1',
          ],
          [
            'promo_id' => 2,
            'promo' => 'A2',
          ],
          [
            'promo_id' => 3,
            'promo' => 'A3',
          ],
          [
            'promo_id' => 4,
            'promo' => 'A4',
          ],
          [
            'promo_id' => 5,
            'promo' => 'A5',
          ]
          ]);
    }
}
