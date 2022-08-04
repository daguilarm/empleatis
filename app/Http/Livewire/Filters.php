<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;

class Filters extends Component
{
    public array $workday = [];

    public function render()
    {
        $this->emit('optionFields', [$this->workday]);

        return view('components.livewire.filters');
    }
}
