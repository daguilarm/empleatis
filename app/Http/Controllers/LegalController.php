<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\Configurable;

class LegalController
{
    use Configurable;

    public function advice()
    {
        return view('legal.advice')
            ->with(
                'config',
                $this->configuration('legal.advice')
            );
    }

    public function cookies()
    {
        return view('legal.cookies')
            ->with(
                'config',
                $this->configuration('legal.cookies')
            );
    }

    public function privacity()
    {
        return view('legal.privacity')
            ->with(
                'config',
                $this->configuration('legal.privacity')
            );
    }
}
