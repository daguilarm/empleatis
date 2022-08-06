<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;

class Filters extends Component
{
    public array $workday = [];

    public ?int $salary = null;

    public function render()
    {
        $this->emit('optionFields', [$this->workday, $this->salary]);

        return view('components.livewire.options_filters');
    }
}
