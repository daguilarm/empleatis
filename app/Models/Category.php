<?php

namespace App\Models;

use App\Models\Services\CategoryService;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $search_name
 * @property int $type
 * @property string|null $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $offers
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category search(\Illuminate\Support\Collection $data)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category whereCreatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category whereDescription($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category whereId($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category whereName($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category whereSearchName($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category whereTitle($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category whereType($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category whereUpdatedAt($value)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category withCacheCooldownSeconds(?int $seconds = null)
 * @mixin \Eloquent
 */
class Category extends Model
{
    use HasFactory;
    use CategoryService;
    use Cachable;

    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Get the region
     */
    public function offers(): HasOne
    {
        return $this->hasOne(Offer::class);
    }
}
