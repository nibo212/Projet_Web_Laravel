<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Entreprise::latest()->paginate(5);
        return view('Entreprise.index', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function index2()
    // {
    //     $data = Entreprise::latest()->paginate(5);
    //     return view('Entreprise.search', compact('data'))
    //     ->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function search(Request $request)
    {
    
        $q= $request->input('q');

        $data = Entreprise::where('entreprise_nom','like',"%$q%")
                ->orWhere('entreprise_description','like',"%$q%")
                ->paginate(6);

        return view('Entreprise.search')->with('data',$data);

        // $entreprise = DB::table('entreprises')->where('entreprise_nom','like','%'.$search.'%')->paginate(5);
        // return view('Entreprise.index',['entreprises'=> $entreprise]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Entreprise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entreprise::create($request->all());

        return redirect()->route('Entreprise.index')
                        ->with('success',"L'offre a bien été créée !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise $Entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $Entreprise)
    {
        return view('Entreprise.show', compact('Entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise $Entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $Entreprise)
    {
        return view('Entreprise.edit',compact('Entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise $Entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Entreprise)
    {
        $Entreprise->update($request->all());

        return redirect()->route('Entreprise.index')
                        ->with('success',"L'offre a bien été MAJ !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise $Entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $Entreprise)
    {
        $Entreprise->delete();

        return redirect()->route('Entreprise.index')
                        ->with('success',"L'offre a bien été sup !");
    }
}
