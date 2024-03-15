<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    protected $tables = 'clients';

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
