<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
          
            [
              'id' => 1,
              'nom' => 'Admin',
              
              ],
              [
                'id' => 2,
                'nom' => 'Tuteur',
              
              ],
              [
                'id' => 3,
                'nom' => 'Delegue',
              ],
              [
                'id' => 4,
                'nom' => 'Etudiant',
              ]
            ]);
    }
}
