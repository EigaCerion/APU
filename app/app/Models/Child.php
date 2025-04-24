<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = ['mother_id', 'name', 'nik', 'birth_date', 'gender', 'address'];

    public function mother()
    {
        return $this->belongsTo(Mother::class);
    }

    public function weights()
    {
        return $this->hasMany(Weight::class);
    }

    public function vaccinations()
    {
        return $this->hasMany(Vaccination::class);
    }
}
