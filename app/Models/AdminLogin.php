<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
    use HasFactory;
    protected $timestamps = false;

    protected $fillable = ['admin_name', 'admin_email', 'admin_password'];
}
