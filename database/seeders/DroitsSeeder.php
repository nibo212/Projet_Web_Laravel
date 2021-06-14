<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DroitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('droits')->insert([
          [
            'id' => 1,
            'nom' => 'RechercheEntreprise',
            
            ],
            [
              'id' => 2,
              'nom' => 'CreerEntreprise',
            
            ],
            [
              'id' => 3,
              'nom' => 'ModifierEntreprise',
            ],
            [
              'id' => 4,
              'nom' => 'EvaluerEntreprise',
            ],
            [
              'id' => 5,
              'nom' => 'SupprimerEntreprise',
            ],
            [
              'id' => 6,
              'nom' => 'StatsEntreprise',
            ],
            [
              'id' => 7,
              'nom' => 'RechercheOffre',
            ],
            [
              'id' => 8,
              'nom' => 'CreerOffre',
            ],
            [
              'id' => 9,
              'nom' => 'ModifierOffre',
            ],
            [
              'id' => 10,
              'nom' => 'SupprimerOffre',
            ],
            [
              'id' => 11,
              'nom' => 'StatsOffre',
            ],
            [
              'id' => 12,
              'nom' => 'RechercherPilote',
            ],
            [
              'id' => 13,
              'nom' => 'CreerPilote',
            ],
            [
              'id' => 14,
              'nom' => 'ModifierPilote',
            ],
            [
              'id' => 15,
              'nom' => 'SupprimerPilote',
            ],
            [
              'id' => 16,
              'nom' => 'RechercherDelegue',
            ],
            [
              'id' => 17,
              'nom' => 'CreerDelegue',
            ],
            [
              'id' => 18,
              'nom' => 'ModifierDelegue',
            ],
            [
              'id' => 19,
              'nom' => 'SupprimerDelegue',
            ],
            [
              'id' => 20,
              'nom' => 'AssignerDroitDelegue',
            ],
            [
              'id' => 21,
              'nom' => 'RechercherEtudiant',
            ],
            [
              'id' => 22,
              'nom' => 'CreerEtudiant',
            ],
            [
              'id' => 23,
              'nom' => 'ModifierEtudiant',
            ],
            [
              'id' => 24,
              'nom' => 'SupprimerEtudiant',
            ],
            [
              'id' => 25,
              'nom' => 'StatsEtudiant',
            ],
            [
              'id' => 26,
              'nom' => 'AjouterOffreWishlist',
            ],
            [
              'id' => 27,
              'nom' => 'RetirerOffreWishlist',
            ],
            [
              'id' => 28,
              'nom' => 'PostulerOffre',
            ],
            [
              'id' => 29,
              'nom' => 'InfoCandidatureStep1',
            ],
            [
              'id' => 30,
              'nom' => 'InfoCandidatureStep2',
            ],
            [
              'id' => 31,
              'nom' => 'InfoCandidatureStep3',
            ],
            [
              'id' => 32,
              'nom' => 'InfoCandidatureStep4',
            ],
            [
              'id' => 33,
              'nom' => 'InfoCandidatureStep5',
            ],
            [
              'id' => 34,
              'nom' => 'InfoCandidatureStep6',
            ],



            ]);
    }
}
