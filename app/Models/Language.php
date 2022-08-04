<?php

namespace App\Models;

use App\Models\Services\LanguageService;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //use Cachable;
    use HasFactory;
    use LanguageService;

    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'languages';
}
