<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casevictim extends Model
{
    use HasFactory;
    protected $table ="complaint_victim";
    protected $primaryKey="complaint_victim_id ";
}
