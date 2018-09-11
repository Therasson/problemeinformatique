<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'name',
        'categorie_id',
        'file',
        'prix',
        //'description',
        'etat'
    ];
}
