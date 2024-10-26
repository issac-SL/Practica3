<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periodo extends Model
{
    use HasFactory;
    protected $fillable =['idperiodo','periodo','descCorta','fechaIni','fechaFin'];
}
