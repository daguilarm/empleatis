<?php

namespace App\Models;

use App\Models\Services\CategoryService;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;
    use CategoryService;
    //use Cachable;

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
