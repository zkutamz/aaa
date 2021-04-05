<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_post extends Model
{
    public $fillable = [
    'title',
        'description',
        'img',
        'link',
    ];
}
