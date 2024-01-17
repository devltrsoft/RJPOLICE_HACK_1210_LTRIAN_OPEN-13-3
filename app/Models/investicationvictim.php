<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investicationvictim extends Model
{
    use HasFactory;
    
    protected $table ="victim";
    protected $primaryKey="investigation_victim_id";
}
