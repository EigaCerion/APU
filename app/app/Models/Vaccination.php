<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = ['child_id', 'date', 'vaccine_type', 'notes'];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
}
