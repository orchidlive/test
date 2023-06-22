<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'forename',
        'surname',
        'email',
        'phone',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
