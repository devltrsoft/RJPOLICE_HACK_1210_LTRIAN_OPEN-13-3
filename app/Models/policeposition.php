<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class policeposition extends Model
{
    use HasFactory;
    protected $table ="position";
    protected $primaryKey="position_id";
}
