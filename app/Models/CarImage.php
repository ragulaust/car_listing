<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarImage extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable= [
        'cars_id', 'filename', 'orginal_filename', 'filetype','filesize','file'
    ];

    public function Cars(){
        return $this->belongsTo(Cars::class);
    }
}
