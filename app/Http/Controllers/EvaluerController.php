<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Evaluer;
use Illuminate\Http\Request;

class EvaluerController extends Controller
{




    public function add(Entreprise $Entreprise)
    {
    Evaluer::firstOrCreate([
      'entreprise_id' => $Entreprise->entreprise_id,
      'id' => auth()->user()->id
    ]);

        
    return back();
}

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $data = Evaluer::latest()->paginate(5);
    
    //     return view('Evaluer.index',compact('data'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('Evaluer.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         // 'entreprise_evaluation' => 'required',
            
    //     ]);
    
    //     Evaluer::create($request->all());
     
    //     return redirect()->route('Evaluer.index')
    //                     ->with('success','Post created successfully.');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Evaluer  $Evaluer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Evaluer $Evaluer)
    // {
    //     return view('Evaluer.show',compact('Evaluer'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *@param  \App\Models\Evaluer  $Evaluer
    //  * @param  \App\Models\Entreprise  $entreprise
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Evaluer  $Evaluer)
    // {
    //     return view('Evaluer.edit',compact('Evaluer'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Entreprise  $entreprise
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Evaluer  $Evaluer)
    // {
    //     $request->validate([
    //         // 'entreprise_evaluation' => 'required',
            
    //     ]);
    
    //     $Evaluer->update($request->all());
    
    //     return redirect()->route('Evaluer.index')
    //                     ->with('success','Post updated successfully');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *@param  \App\Models\Evaluer  $Evaluer
    //  * @param  \App\Models\Entreprise  $entreprise
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Evaluer  $Evaluer)
    // {
    //     $Evaluer->delete();
    
    //     return redirect()->route('Evaluer.index')
    //                     ->with('success','Post deleted successfully');
    // }
}
