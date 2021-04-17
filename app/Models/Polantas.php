<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polantas extends Model
{
    use HasFactory;
    protected $table = "polantas";
    protected $fillable = ["id_lantas","password"];
}
