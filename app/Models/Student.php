<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'class_id',
        'parent_id',
        'first_name',
        'last_name',
        'birth_date',
        'gender',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    public function parent()
    {
        return $this->belongsTo(ParentModel::class, 'parent_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
