<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reticula extends Model
{
    use HasFactory;
    protected $fillable =['idreticula','descripcion','fechaEnvigor','carrera_id'];
    public function carrera(): BelongsTo{
        return $this->belongsTo(Carrera::class);
}
}
