<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulir extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'address',
        'dateOfBirth',
        'email',
        'gender',
        'religion',
        'status',
        'job',
        'terms',
    ];
}