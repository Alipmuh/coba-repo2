<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    // protected $fillable=['title', 'excerpt', 'body']; # agar title, excerpt, dan body bisa diisi, sisanya sisanya tidak bisa
    protected $guarded=['id']; # agar id tidak bisa diisi, sisanya bisa
}
