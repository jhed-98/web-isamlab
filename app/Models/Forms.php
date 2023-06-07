<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;

    protected $table = "forms";

    protected $fillable = ['name', 'last_name', 'email', 'phone', 'check_info'];
}
