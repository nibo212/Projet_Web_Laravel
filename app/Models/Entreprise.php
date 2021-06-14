<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Entreprise extends Model
{
    use HasFactory;
    protected $primaryKey = 'entreprise_id';
    protected $fillable = [
        'entreprise_nom', 'email','entreprise_secteur','entreprise_nb_stagaires', 'entreprise_description','entreprise_visible'
    ];

    public function offres() 
{ 
    return $this->hasMany(Offre::class); 
}

public function evaluer_user() 
{ 
    return $this->hasMany(Evaluer::class); 
}

public function users() 
{ 
    return $this->belongsToMany(User::class); 
}

public function users_c()
{

        return $this->belongsToMany(
        User::class,
        'candidatures',
        'entreprise_id',
        'id');
        }


public function users_e()
        {
        
        return $this->belongsToMany(
        User::class,
        'evaluers',
        'entreprise_id',
        'id', 
        'entreprise_evaluation'
    );
        }

}



