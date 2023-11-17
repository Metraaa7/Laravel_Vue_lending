<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDegustation extends Model
{
    use HasFactory;
    protected $table = "to_degustations";
    protected $guarded = false;
}
