<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tache extends Model
{
    protected $fillable = [
        'Titre',
        'Description',
        'prix',
        'Etat',
        'Client_id',
        'livreur_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tache) {

            $tache->Etat = 'Attente';
        });
    }

    protected function Client ():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    protected function Livreur():BelongsTo
    {
        return $this->belongsTo(Livreur::class);
    }
}
