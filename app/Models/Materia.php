<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable =['idmateria','nombremateria','nombremediano','nombrecorto'];
    public function reticula(): BelongsTo{
        return $this->belongsTo(Reticula::class);
}
}
