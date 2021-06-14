<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    public $timestamps = false;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     *
     */
    protected $fillable = ['name','email','password','user_centre','user_role','promo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function offres()
    {

        return $this->belongsToMany(
        Offre::class,
        'wishlists',
        'id',
        'offre_id');
        }

 



public function entreprise_c()
{

        return $this->belongsToMany(
        Entreprise::class,
        'candidatures',
        'id',
        'entreprise_id');
        }
    public function evaluer_entreprise() { 
        return $this->hasMany(Evaluer::class); 
    }
    /* user peut évaluer plusieurs entreprises */

    public function entreprise() { 
        return $this->belongsToMany(Entreprise::class); 
    }
    /* lien entre entreprise et user */

    public function role(){
        return $this->belongsTo(Role::class);
    }
    /* lien entre user et role */

    public function droits(){
        return $this->belongsToMany(Droit::class, "droit_user");
    }
    /* lien entre droit et user */

    public function assignerRole(Role $role){
        $this->role()->associate($role);
        $this->save();
    }
    /* permet d'assigner des rôles */

    public function assignerDroit(Droit $droit){
        $this->droits()->save($droit);
    }
    /* permet d'assigner des droits */

    public function getDroits(){
        if ($this->role->nom=='Delegue') {
            return $this->droits();
        }
        else {
            return $this->role->droits();
        }
    }
    /* Si l'user est un délégé, on recoit les droits qu'il lui sont assignés
    sinon on retourne les droits que l'utilisateur a grâce à son rôle */
    

}
