<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\Services\ProvinceService;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Province
 *
 * @property int $id
 * @property int $country_id
 * @property int $region_id
 * @property string $name
 * @property string $alt_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $offers
 *
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province search(\Illuminate\Support\Collection $offers)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province whereAltName($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province whereCountryId($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province whereCreatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province whereId($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province whereName($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province whereRegionId($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province whereUpdatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Province withCacheCooldownSeconds(?int $seconds = null)
 * @mixin \Eloquent
 */
class Province extends BaseModel
{
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
