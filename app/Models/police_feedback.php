<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class police_feedback extends Model
{
    use HasFactory;

    protected $table = 'police_feedback';
    protected $primaryKey ="police_feedback_id";
}
