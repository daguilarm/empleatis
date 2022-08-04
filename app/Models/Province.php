<?php

namespace App\Models;

use App\Models\Services\ProvinceService;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Province extends Model
{
    //use Cachable;
    use HasFactory;
    use ProvinceService;

    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'provinces';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [];

    /**
     * Get the region
     */
    public function offers(): HasOne
    {
        return $this->hasOne(Offer::class);
    }
}
