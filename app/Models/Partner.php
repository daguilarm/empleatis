<?php

namespace App\Models;

/**
 * App\Models\Partner
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner whereCreatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner whereId($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner whereName($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner whereUpdatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner whereUrl($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Partner withCacheCooldownSeconds(?int $seconds = null)
 * @mixin \Eloquent
 */
class Partner extends BaseModel
{
    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'partners';

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
}
