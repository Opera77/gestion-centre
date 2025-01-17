<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employabilite extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'employabilites';
    protected $fillable = [
        'name',
        'type_contrat_id',
        'poste',
        'nomboite',
        'periode',
        'odcuser_id',
        'derniere_activite',
        'derniere_service',
        'date_participation',
    ];



    public function odcuser()
    {
        return $this->belongsTo(Odcuser::class);
    }
    public function type_contrat()
    {
        return $this->belongsTo(TypeContrat::class);
    }

    public function entreprise()
    {
        return $this->hasMany(Entreprise::class);
    }

    public function poste()
    {
        return $this->hasMany(Poste::class);
    }


}