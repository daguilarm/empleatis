<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\Configurable;
use App\Models\Language;
use App\Models\Offer;
use Illuminate\View\View;

class HomeController
{
    use Configurable;

    /**
     * Handle the incoming request
     */
    public function __invoke(): View
    {
        return view('master')
            ->with('languages', Language::topLanguages())
            ->with('salaries', Offer::topSalary())
            ->with('config', $this->configuration('home'));
    }
}
