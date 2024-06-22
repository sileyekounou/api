<?php

namespace App\Models;

use Bilan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'user_mission_id',
        'bilan_id'
    ];


    public function bilan() : BelongsTo {
        return $this->belongsTo(Bilan::class, 'bilan_id', 'id') ;
    }

}
