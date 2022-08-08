<?php

namespace App\Models;

use App\Models\Services\LinkService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    use LinkService;

    protected $connection = 'analytics';

    protected $fillable = [
        'offer_id',
        'referer',
        'category_id',
        'language_id',
        'province_id',
        'device_type',
        'device_name',
        'robot',
        'platform',
        'browser',
        'salary_year',
        'ranking',
        'workday_type',
    ];
}
