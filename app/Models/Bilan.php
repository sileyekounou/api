<?php

use App\Models\Evaluation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bilan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'date',
    ];

    public function evaluations() : HasMany {
        return $this->hasMany(Evaluation::class, 'bilan_id', 'id');
    }
}
