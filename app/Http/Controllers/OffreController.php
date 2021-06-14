<?php

namespace App\Http\Controllers;
use App\Models\Offre;
use Illuminate\Http\Request;
use App\Models\Entreprise;


class OffreController extends Controller
{




    /**
     * Display a listing of the resource.
     *@param  \App\Models\Offre $entreprise
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = Offre::find(2);
        //dd($user->id);

    $data = Offre::latest()->paginate(5);
    return view('Offre.index', compact('data'));
    // ->with('i', (request()->input('page', 1) - 1) * 5);

    // $entreprise = Offre::find(2)->entreprise;
    // return view('Offre.index', compact('entreprise'));


    }

    public function search(Request $request)
    {
    
        $q= $request->input('q');

        $data = Offre::where('offre_titre','like',"%$q%")
                ->orWhere('offre_description','like',"%$q%")
                ->paginate(6);

        return view('Offre.search')->with('data',$data);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Offre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /*$Offre = new Article;
        $Offre->promotion = $request->promotion;
        $Offre->duree = $request->duree;
        $Offre->remuneration = $request->remuneration;
        $Offre->date =$request->date;
        $Offre->place = $request->place;
        $Offre->titre = $request->titre;
        $Offre->description = $request->description;
        $Offre->save();
        return back()->with('message', "L'offre a bien été créée !");*/



        Offre::create($request->all());

        return redirect()->route('Offre.index')
                        ->with('success',"L'offre a bien été créée !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offre $Offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $Offre)
    {   
        $data = Offre::latest();
        return view('Offre.show', compact('Offre','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offre $Offre
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $Offre)
    {
        return view('Offre.edit',compact('Offre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offre $Offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $Offre)
    {
        /*$request->validate([
            'promotion' => 'required',
            'duree' => 'required',
        ]);*/

        $Offre->update($request->all());

        return redirect()->route('Offre.index')
                        ->with('success',"L'offre a bien été MAJ !");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offre $Offre
     * @return \Illuminate\Http\Response
     */

    public function destroy(Offre $Offre)
    {
       $Offre->delete();

        return redirect()->route('Offre.index')
                        ->with('success',"L'offre a bien été sup !");
    }
}
