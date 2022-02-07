<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Who_are_we extends Model
{
    use HasFactory;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'details_ar',
        'details_en',
    ];
}
