<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $connection = 'analytics';

    protected $fillable = [
        'device_type',
        'device_name',
        'robot',
        'platform',
        'browser',
        'offer_id',
        'category_id',
        'language_id',
        'referer'
    ];
}
