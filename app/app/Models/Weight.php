<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    protected $fillable = ['child_id', 'date', 'weight_kg', 'height_cm'];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
}
