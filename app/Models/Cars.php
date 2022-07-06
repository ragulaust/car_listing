<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cars extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'model', 'mileage','hex_code','year','status'
    ];

    public function CarImage(){
        return $this->hasOne(CarImage::class);
    }
}
