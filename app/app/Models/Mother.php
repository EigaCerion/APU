<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nik', 'phone', 'address'];

    public function children()
    {
        return $this->hasMany(Child::class);
    }
}
