<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rapport extends Model
{
    use HasFactory;

    public function user_tache_mission() : BelongsTo {
        return $this->belongsTo(User_Mission_Tache::class, 'user_id', 'id');
    }
}
