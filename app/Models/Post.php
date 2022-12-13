<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $dates = ['selled_at'];
    protected $fillable = ['title', 'pic', 'status', 'content', 'sort', 'enabled'];
}