<?php

namespace App\Models;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','destinationId','created_at','update_at'];

    public function destination()
    {
        return $this->hasMany(Destination::class,'id');
    }
}
