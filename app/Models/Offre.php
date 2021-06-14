<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
  //public $timestamps = false;
    use HasFactory;

    
    protected $primaryKey = 'offre_id';

    protected $fillable = [
        'offre_promotion', 'offre_duree', 'offre_remuneration', 'offre_date','offre_place','offre_titre', 'offre_description','entreprise_id'
      ];

      public function entreprise()
      {
          return $this->belongsTo(Entreprise::class,'entreprise_id');
      }

    public function users()
{
        return $this->belongsToMany(
        User::class,
        'wishlists',
        'offre_id',
        'id');
}

    
}









