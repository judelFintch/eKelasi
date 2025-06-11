<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'name',
        'amount',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
