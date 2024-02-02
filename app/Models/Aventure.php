<?php

namespace App\Models;

use App\Models\Destinations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','destinationId'];

    public function destination()
    {
        return $this->hasMany(Destinations::class,'id');
    }
}
