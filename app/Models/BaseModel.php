<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BaseModel
 *
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 * @mixin \Eloquent
 */
class BaseModel extends Model
{
    use Cachable;
}
