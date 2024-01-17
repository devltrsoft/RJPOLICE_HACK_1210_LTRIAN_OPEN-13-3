<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warrent_type extends Model
{
    use HasFactory;
    protected $table ="warrant_type";
    protected $primaryKey="warrant_type_id";
}
