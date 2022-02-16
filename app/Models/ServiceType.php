<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceType extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'name_ar',
        'name_en',
    ];

    public function service_item(){
        return $this->hasMany(ServiceItem::class,'service_type_id');
    }

    public function message(){
        return $this->hasMany(Message::class, 'service_type_id');
    }
}
