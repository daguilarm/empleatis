<?php

namespace App\Models;

use App\Models\Services\OfferService;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offer extends Model
{
    use HasFactory;
    use OfferService;
    use Cachable;

    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'offers';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [];

    /**
     * Get the region
     */
    public function regions(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    /**
     * Get the province
     */
    public function provinces(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    /**
     * Get the category
     */
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get the category
     */
    public function languages(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
