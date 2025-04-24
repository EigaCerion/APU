<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'nik', 'birth_date', 'address', 'phone',
    ];

    public function children()
    {
        return $this->hasMany(Child::class);
    }
}
