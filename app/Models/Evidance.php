<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evidance extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table ="evidance";
    protected $primaryKey ="evidance_id";

    protected $fillable = [
      
    ];
}
