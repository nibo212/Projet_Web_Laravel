<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidature;
use App\Models\Entreprise;
use App\Models\Offre;

class CandidatureController extends Controller
{
    public function add(Offre $Offre)
    {
    Candidature::firstOrCreate([
      'entreprise_id' => $Offre->entreprise->entreprise_id,
      'id' => auth()->user()->id
      // 'entreprise_evaluation'
    ]);

        
    return back();
}

public function destroy(Offre $Offre)
    {
       Candidature::where([
      'entreprise_id' => $Offre->entreprise->entreprise_id,
      'id' => auth()->user()->id
    ])->delete();

return redirect()->back();

    }
}
