<?php

namespace App\Models;

use App\Models\Services\LinkService;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Link
 *
 * @property int $id
 * @property string $offer_id
 * @property string $referer
 * @property int $category_id
 * @property int $language_id
 * @property int $province_id
 * @property string $device_type
 * @property string $device_name
 * @property string|null $robot
 * @property string $platform
 * @property string $browser
 * @property float|null $salary_year
 * @property float $ranking
 * @property string $workday_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Link isInDatabase(string $id, string $referer)
 * @method static \Illuminate\Database\Eloquent\Builder|Link newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Link newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Link query()
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereBrowser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereDeviceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereDeviceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereRanking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereReferer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereRobot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereSalaryYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereWorkdayType($value)
 * @mixin \Eloquent
 */
class Link extends Model
{
    use LinkService;

    protected $fillable = [
        'offer_id',
        'referer',
        'category_id',
        'language_id',
        'province_id',
        'device_type',
        'device_name',
        'robot',
        'platform',
        'browser',
        'salary_year',
        'ranking',
        'workday_type',
    ];
}
