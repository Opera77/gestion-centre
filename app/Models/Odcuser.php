<?php

namespace App\Models;

use App\Models\Activite;
use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Odcuser extends Model
{
    use HasFactory;

    protected $table = "odcusers" ;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'gender',
        'birth_date',
        'linkedin',
        'profession',
        'odc_country',
        'role',
        'is_active',
        'hashtags',
        'coding_school',
        'fablab_solidaire',
        'training',
        'internship',
        'event',
        'subscribe',
        'newsletters',
        'topics',
        'last_connection',
        '_id',
        'detail_profession',
        'createdAt',
        'updatedAt',
        '__v',
        'picture',
        'user_cv'
    ] ;

    protected $casts = [
        'profession' => 'array',
        'detail_profession' => 'array'
    ];

    public function activite(): BelongsToMany
    {
        return $this->belongsToMany(Activite::class);
    }
    public function candidat(): HasMany
    {
        return $this->hasMany(Candidat::class);
    }

}
