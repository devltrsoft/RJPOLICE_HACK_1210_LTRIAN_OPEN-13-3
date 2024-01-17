<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warrant extends Model
{
    use HasFactory;
    protected $table ="warrant";
    protected $primaryKey="warrant_id";
}
