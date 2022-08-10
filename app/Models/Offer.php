<?php

namespace App\Models;

use App\Models\Services\OfferService;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Offer
 *
 * @property string $id
 * @property string $code
 * @property string $title
 * @property string $description
 * @property string|null $requirements
 * @property string $url
 * @property string|null $date
 * @property int $region_id
 * @property int $province_id
 * @property string|null $locations
 * @property string|null $city
 * @property string|null $company
 * @property string|null $source
 * @property int|null $category_id
 * @property int|null $language_id
 * @property mixed|null $keywords
 * @property int|null $contract_id
 * @property string $workday_type
 * @property string|null $salary
 * @property float $salary_year
 * @property float $salary_max
 * @property float $salary_min
 * @property string $salary_currency
 * @property string|null $experience
 * @property int|null $study_id
 * @property float $ranking
 * @property int $error_salary
 * @property int $error_url
 * @property string $user_id
 * @property string $partner_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $categories
 * @property-read \App\Models\Language|null $languages
 * @property-read \App\Models\Province|null $provinces
 * @property-read \App\Models\Region|null $regions
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Offer betweenSalary(?int $salary)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer fulltext(?string $search)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer province(?string $locations)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer searchOffers(array $idFields = [], array $optionFields = [], bool $is_search = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer topOffers(int $perPage)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer topSalary()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereErrorSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereErrorUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereLocations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer wherePartnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereRanking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereSalaryCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereSalaryMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereSalaryMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereSalaryYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereStudyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereWorkdayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer workday(?array $workday)
 * @mixin \Eloquent
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Offer byId(?int $category, ?int $province, ?int $language)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer noResults()
 */
class Offer extends Model
{
    use HasFactory;
    use OfferService;
    // use Cachable;

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
