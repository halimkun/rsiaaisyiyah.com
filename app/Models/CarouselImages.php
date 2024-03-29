<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselImages extends Model
{
    use HasFactory;

    protected $fillable = ['image'];

    // table
    protected $table = 'carousel_images';

    // timestamps
    public $timestamps = true;
}
