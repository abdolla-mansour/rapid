<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook',
        'linkedin',
        'tweeter',
        'instagram',
        'snapchat',
        'tiktok',
        'whatsapp',
        'email',
        'phone',
        'head_office',
    ];

    public $timestamps = false;
}
