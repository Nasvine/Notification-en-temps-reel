<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnvoiMessage extends Model
{
    protected $fillable = [
     'objet','message'
    ];
    use HasFactory;
}
