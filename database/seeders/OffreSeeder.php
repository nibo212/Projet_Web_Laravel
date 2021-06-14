<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offres')->insert([
          [
            'offre_id' => 1,
            'offre_promotion' => 1,
            'offre_duree' => '6',
            'offre_remuneration' => '1500',
            'updated_at' => '2020-02-01 00:00:00',
            'created_at' => '2020-02-01 00:00:00',
            'offre_date' => '20/10/02',
            'offre_place' => '4',
            'offre_titre' => 'Stage au cesi',
            'offre_description' => 'Strasbourg',
            'entreprise_id' => 1,

          ],
          [
            'offre_id' => 2,
            'offre_promotion' => 2,
            'offre_duree' => '8',
            'offre_remuneration' => '500',
            'updated_at' => '2020-03-01 00:00:00',
            'created_at' => '2020-03-01 00:00:00',
            'offre_date' => '20/07/04',
            'offre_place' => '8',
            'offre_titre' => "Stage à l'INSA",
            'offre_description' => "Stage à l'INSA",
            'entreprise_id' => 2,

          ],
          [
            'offre_id' => 3,
            'offre_promotion' => 3,
            'offre_duree' => '4',
            'offre_remuneration' => '300',
            'updated_at' => '2020-07-05 00:00:00',
            'created_at' => '2020-07-05 00:00:00',
            'offre_date' => '20/08/02',
            'offre_place' => '7',
            'offre_titre' => 'Stage chez devops',
            'offre_description' => 'Un stage très enrichissant',
            'entreprise_id' => 3,

          ],
          [
            'offre_id' => 4,
            'offre_promotion' => 4,
            'offre_duree' => '6',
            'offre_remuneration' => '1500',
            'updated_at' => '2020-02-01 00:00:00',
            'created_at' => '2020-02-01 00:00:00',
            'offre_date' => '20/10/02',
            'offre_place' => '4',
            'offre_titre' => 'Stage au cesi',
            'offre_description' => 'Strasbourg',
            'entreprise_id' => 1,

          ],
          [
            'offre_id' => 5,
            'offre_promotion' => 5,
            'offre_duree' => '18',
            'offre_remuneration' => '2500',
            'updated_at' => '2020-12-01 00:00:00',
            'created_at' => '2020-12-01 00:00:00',
            'offre_date' => '20/12/02',
            'offre_place' => '1',
            'offre_titre' => 'Stage chez msi',
            'offre_description' => 'Un stage encore plus enrichissant',
            'entreprise_id' => 4,
          ]

          ]);
    }
}
