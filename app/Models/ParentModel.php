<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    use HasFactory;

    protected $table = 'parents';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }
}
