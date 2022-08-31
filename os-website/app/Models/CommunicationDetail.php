<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunicationDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'lead_id',
        'details',
        'user_id',
    ];
    protected $table='communication_details';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
