<?php

namespace App\Models;

use App\Models\Services\RegionService;

/**
 * App\Models\Region
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property string $alt_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region searchByName(?int $region, string $search)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region whereAltName($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region whereCountryId($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region whereCreatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region whereId($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region whereName($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region whereUpdatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Region withCacheCooldownSeconds(?int $seconds = null)
 * @mixin \Eloquent
 */
class Region extends BaseModel
{
    use RegionService;

    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'regions';
}
