<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'libelle',
        'description',
        'slug',
        'etat'
    ];

    /***
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produit()
    {
        return $this->hasMany('App\produit');
    }
}
