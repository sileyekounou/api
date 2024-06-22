<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tache extends Model
{
    use HasFactory;


    public function missions() : BelongsToMany {
        return $this->belongsToMany(Mission::class, 'mission_tache', 'tache_id', 'mission_id')
                    ->withTimestamps();;
    }
}
