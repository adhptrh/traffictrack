<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPerempatan extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = "list_perempatan";
    protected $fillable = [
        'name',
        'tingkatmacet',
        'kecepatanmaks',
        'lampu'
    ];
}
