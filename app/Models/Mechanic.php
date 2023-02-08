<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    /**
     * Get the car's owner.
     */
    public function carOwner()
    {
        return $this->hasManyThrough(Owner::class, Car::class);
    }
}
