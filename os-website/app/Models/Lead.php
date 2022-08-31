<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'email',
        'phone_number',
        'project_details',
        'status_id',
        'contact_time',
    ];
    protected $table='lead';
    public function service()
    {   
     return $this->belongsToMany(Service::class,'lead_services');

    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}

