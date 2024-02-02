<?php

namespace App\Models;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','destination_id'];
    protected $with = ["images"];

    public function destination()
    {
        return $this->belongsTo(Destination::class,'destination_id');
    }
    public function images(){
        return $this->hasMany(Photo::class);
    }
}
