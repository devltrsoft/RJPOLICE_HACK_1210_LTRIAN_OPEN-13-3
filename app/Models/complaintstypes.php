<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaintstypes extends Model
{
    use HasFactory;
    protected $table ="complaint_category";
    protected $primaryKey="complaint_type_id";
}
