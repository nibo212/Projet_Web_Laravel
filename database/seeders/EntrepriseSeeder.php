<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entreprises')->insert([
          [
            'entreprise_id' => 1,
            'entreprise_nom' => 'cesi',
            'email' => 'cesi@cesi.fr',
            'entreprise_secteur' => 'info',
            'entreprise_nb_stagiaires' => '12',
            'entreprise_description' => "Ecole d'ingénieurs et d'alternance réputée",
            'entreprise_visible' => '0',
            'localite_ville'=> 'Strasbourg',
            'localite_cp'=> '67200',
            ],
            [
            'entreprise_id' => 2,
            'entreprise_nom' => 'INSA',
            'email' => 'insa@insa.fr',
            'entreprise_secteur' => 'ingénieurs',
            'entreprise_nb_stagiaires' => '8',
            'entreprise_description' => "Ecole d'ingénieurs et laboratoire de recherches",
            'entreprise_visible' => '0',
            'localite_ville'=> 'Bordeaux',
            'localite_cp'=> '33000',
            ],
            [
            'entreprise_id' => 3,
            'entreprise_nom' => 'devops',
            'email' => 'devops@devops.fr',
            'entreprise_secteur' => 'info',
            'entreprise_nb_stagiaires' => '4',
            'entreprise_description' => "Société d'informatique très performante",
            'entreprise_visible' => '0',
            'localite_ville'=> 'Mulhouse',
            'localite_cp'=> '68400'
            ],
            [
            'entreprise_id' => 4,
            'entreprise_nom' => 'msi',
            'email' => 'msi@msi.fr',
            'entreprise_secteur' => 'Fabrican matériel info',
            'entreprise_nb_stagiaires' => '120',
            'entreprise_description' => "Fabrican matériel informatique déstiné aux gamers",
            'entreprise_visible' => '0',
            'localite_ville'=> 'Paris',
            'localite_cp'=> '75000'
          ]
            ]);
    }
}
