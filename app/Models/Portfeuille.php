<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfeuille extends Model
{
   protected $fillable = [
    'solde',
    'Client_id',
    'livreur_id',
   ];

   protected static function boot()
    {
        parent::boot();

        static::creating(function ($portefeuille) {

            $portefeuille->solde = 0;
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
