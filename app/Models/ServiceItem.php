<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceItem extends Model
{
    use HasFactory;  use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'service_type_id',
        'name_ar',
        'name_en',
    ];

    public function service_type(){
        return $this->belongsTo(ServiceType::class,'service_type_id');
    }
}
