<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'email',
        'telephone',
        'reg_com',
        'mission_id',
    ];

    public function missions() : HasMany {
        return $this->hasMany(Mission::class, 'mission_id', 'id');
    }
}
