<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          [
            'id' => 1,
            'name' => 'Andros',
            'email' => 'andros@gmail.com',
            'password' => Hash::make('cesicesi'),
            'user_centre' => 'Strasbourg',
            'role_id' => '1',
            'promo_id' => '5',


          ],
          [
            'id' => 2,
            'name' => 'Meline',
            'email' => 'meline@gmail.com',
            'password' => Hash::make('cesicesi'),
            
            'user_centre' => 'Strasbourg',
            'role_id' => '1',
            'promo_id' => '4',


          ],
          [
            'id' => 3,
            'name' => 'Nico',
            'email' => 'nico@gmail.com',
            'password' => Hash::make('cesicesi'),
            
            'user_centre' => 'Strasbourg',
            'role_id' => '1',
            'promo_id' => '3',


          ],
          [
            'id' => 4,
            'name' => 'Maxime',
            'email' => 'Maxime@gmail.com',
            'password' => Hash::make('cesicesi'),
            
            'user_centre' => 'Strasbourg',
            'role_id' => '1',
            'promo_id' => '2',


          ],
          [
            'id' => 5,
            'name' => 'Maddie',
            'email' => 'maddie@gmail.com',
            'password' => Hash::make('cesicesi'),
            
            'user_centre' => 'Strasbourg',
            'role_id' => '3',
            'promo_id' => '1',


          ],
          [
            'id' => 6,
            'name' => 'JF',
            'email' => 'jf@gmail.com',
            'password' => Hash::make('cesicesi'),
            
            'user_centre' => 'Strasbourg',
            'role_id' => '2',
            'promo_id' => NULL,



          ],
          [
            'id' => 7,
            'name' => 'Gregess',
            'email' => 'greg@gmail.com',
            'password' => Hash::make('cesicesi'),
            
            'user_centre' => 'Strasbourg',
            'role_id' => '4',
            'promo_id' => NULL,
          ]



          ]);

    }
}
