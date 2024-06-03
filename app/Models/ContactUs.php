<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = 'admin_contact';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'lat',
        'long',
    ];
    public $timestamps = false;

}
