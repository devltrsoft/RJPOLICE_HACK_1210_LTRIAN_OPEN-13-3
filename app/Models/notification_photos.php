<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification_photos extends Model
{
    use HasFactory;

    protected $table ="notification_photos";
    protected $primaryKey ="notification_photo_id";

    protected $fillable = [
      
    ];
}
