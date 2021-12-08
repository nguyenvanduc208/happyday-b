<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;
    protected $table = "resort";
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
    protected $fillable = [
        'name',
        'price',
        'limit',
        'size',
        'bed',
        'category_id',
        'desc'
    ];
}
