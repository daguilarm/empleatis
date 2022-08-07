<?php

namespace App\Http\Controllers;

use App\Http\Configurable;

class LegalController
{
    use Configurable;

    public function advice()
    {
        return view('legal.advice')
            ->withConfig(
                $this->configuration('legal.advice')
            );
    }

    public function cookies()
    {
        return view('legal.cookies')
            ->withConfig(
                $this->configuration('legal.cookies')
            );
    }

    public function privacity()
    {
        return view('legal.privacity')
            ->withConfig(
                $this->configuration('legal.privacity')
            );
    }
}
