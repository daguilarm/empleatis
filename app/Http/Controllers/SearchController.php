<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Configurable;
use Illuminate\View\View;

class SearchController
{
    use Configurable;

    /**
     * Show the categories.
     */
    public function __invoke(): View
    {
        // Get the request data
        $data = request()->all();

        // Validate the request
        if (! $this->validateRequest($data)) {
            abort(401);
        }

        return view('master')
            ->with('config', $this->configuration('search'));
    }

    /**
     * Validate request
     */
    private function validateRequest(array $data)
    {
        return
            isset($data['ctp']) &&
            isset($data['mts']) &&
            isset($data['ogp']) &&
            isset($data['tmp']) &&
            str($data['ctp'])->isUuid() &&
            strlen($data['mts']) >= 50 &&
            md5($data['mts']) === $data['ogp'] &&
            count(explode('-', $data['tmp'])) === 3 &&
            is_numeric(explode('-', $data['tmp'])[1]);
    }
}
