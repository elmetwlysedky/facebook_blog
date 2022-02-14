<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'name_en',
        'name_ar',
        'image',
    ];

    public function photo(){
        return $this->hasMany(Image::class , 'category_id');
    }

}
