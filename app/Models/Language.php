<?php

namespace App\Models;

use App\Models\Services\LanguageService;

/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property int $type
 * @property int $top
 * @property string|null $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language topLanguages()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language whereCreatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language whereDescription($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language whereId($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language whereName($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language whereTitle($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language whereTop($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language whereType($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language whereUpdatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Language withCacheCooldownSeconds(?int $seconds = null)
 * @mixin \Eloquent
 */
class Language extends BaseModel
{
    use LanguageService;

    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'languages';
}
