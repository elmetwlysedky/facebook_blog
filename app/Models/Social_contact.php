<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_contact extends Model
{
    use HasFactory;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'facebook',
        'twitter',
        'instagram',
        'google',
        'youtube',
        'pinterest',
        'phone',
        'email'
    ];
}
