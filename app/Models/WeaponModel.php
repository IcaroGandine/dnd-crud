<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponModel extends Model
{
    protected $table = 'weapon';
    protected $fillable = ['name', 'damage', 'weight', 'type', 'description'];

    use HasFactory;
}
