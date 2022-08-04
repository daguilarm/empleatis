<?php

namespace App\Models;

use App\Models\Services\RegionService;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //use Cachable;
    use HasFactory;
    use RegionService;

    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'regions';
}
