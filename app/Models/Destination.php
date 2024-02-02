<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nameDest'
    ];

    public function aventure()
    {
        return $this->belongsTo(Aventure::class,'destinationId');
    }
}
