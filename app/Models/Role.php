<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function droits(){
        return $this->belongsToMany(Droit::class);
    }
    /* lien entre droit et role */

    public function autoriser($droit){
        $this->droits()->save($droit);
    }
    /* lien entre user et role */
}
