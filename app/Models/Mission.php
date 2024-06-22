<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mission extends Model
{
    use HasFactory;

    public function taches() : BelongsToMany {
        return $this->belongsToMany(Tache::class, 'mission_tache', 'mission_id', 'tache_id')
                    ->withTimestamps();;
    }
}
