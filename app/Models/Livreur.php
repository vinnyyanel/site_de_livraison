<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Symfony\Component\Console\Descriptor\Descriptor;

class Livreur extends Model
{
    protected $fillable =[
        'Nom',
        'Prenom',
        'mail',
        'telephone',
        'Password',
    ];

    protected function Tache():HasMany
    {
        return $this->hasMany(Tache::class);
    }

    protected function Portfeuille():HasOne
    {
        return $this->hasOne(Tache::class);
    }
}
