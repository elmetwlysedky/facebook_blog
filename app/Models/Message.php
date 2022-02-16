<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'name',
        'work_type',
        'phone',
        'email',
        'file',
        'items',
        'service_type_id'
    ];

    protected $casts=[
        'items'=>'array'
    ];
    public function service(){
        return $this->belongsTo(ServiceType::class,'service_type_id');
    }
}
