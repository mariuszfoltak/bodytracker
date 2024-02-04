<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightEntries extends Model
{
    use HasFactory;
    protected $table = 'weight_entries';
    protected $fillable = ['user', 'value', 'register_date'];
}
