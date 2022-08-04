<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category search(\Illuminate\Support\Collection $data)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSearchName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
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
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language topLanguages()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
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
 * @property mixed|null $workday_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer searchOffers(array $idFields = [], array $searchFields = [], array $optionFields = [], bool $is_search = false)
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
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereWorkdayId($value)
 */
	class Offer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Partner
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Partner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereUrl($value)
 */
	class Partner extends \Eloquent {}
}

namespace App\Models{
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
 * @method static \Illuminate\Database\Eloquent\Builder|Province newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Province newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Province query()
 * @method static \Illuminate\Database\Eloquent\Builder|Province search(\Illuminate\Support\Collection $offers)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereAltName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereUpdatedAt($value)
 */
	class Province extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Region
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property string $alt_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|Region searchByName(?int $region, string $search)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereAltName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereUpdatedAt($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

