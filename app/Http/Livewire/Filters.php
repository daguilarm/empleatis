<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;

class Filters extends Component
{
    public array $workday = [];

    public ?int $salary = null;

    public ?string $search_value = null;

    public ?string $locations_value = null;

    public function mount(?string $search = null, ?string $locations = null) {
        $this->search_value = $search;
        $this->locations_value = $locations;
    }

    public function render()
    {
        $this->emit('optionFields', [$this->workday, $this->salary]);
        $this->emit('searchFields', [$this->search_value, $this->locations_value]);

        return view('components.livewire.options_filters');
    }
}
