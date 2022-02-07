<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_item extends Model
{
    use HasFactory;  use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'service_type_id',
        'name_ar',
        'name_en',
    ];

    public function service_type(){
        return $this->belongsTo(Service_type::class,'service_type_id');
    }
}
