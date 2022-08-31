<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadService extends Model
{
    use HasFactory;
    protected $fillable = [
        'lead_id',
        'service_id',
    ];
    protected $table='lead_services';
}
