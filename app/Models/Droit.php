<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Droit extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function roles(){
        return $this->belongsToMany(Role::class, "droit_role");
    }
    /* lien entre droit et role */

    public function users(){
        return $this->belongsToMany(User::class, "droit_user");
    }
    /* lien entre droit et user */
}
