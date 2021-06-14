<?php

namespace App\Http\Controllers;
use App\Models\Offre;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Offre $Offre)
    {
    Wishlist::firstOrCreate([
      'offre_id' => $Offre->offre_id,
      'id' => auth()->user()->id
    ]);


    return back();
}
}
