<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use Cachable;
    use HasFactory;

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
