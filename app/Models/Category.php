<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //chỉ định tên table trong trường hợp không đặt tên theo Eloquent
    protected $table = 'category';

    protected $fillable  = [
        'name'
    ];

    public $timestamps = false;

}
