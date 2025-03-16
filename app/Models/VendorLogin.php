<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorLogin extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'vendor_logins';

    protected $fillable= [
        'vendor_login_id',
        'vendor_login_password'
    ];
}
