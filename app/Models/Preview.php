<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function illness()
    {
        return $this->belongsTo(Illness::class);
    }
    public function preview_details()
    {
        return $this->hasMany(PreviewDetails::class);
    }
}
