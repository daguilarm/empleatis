<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\Cookiable;
use App\Models\Offer;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;
use Livewire\Component;

class Saved extends Component
{
    use Cookiable;

    public $list;

    public $total;

    public $showModal;

    protected $listeners = ['cookieAdded' => 'update'];

    /**
     * Set the init values.
     */
    public function mount(): void
    {
        $this->updateElements();
    }

    /**
     * Render the view
     */
    public function render(): View
    {
        return view('components.livewire.saved')
            ->with(
                'offers',
                $this->fromDatabase()
            );
    }

    /**
     * Delete button ID from the cookie.
     * Update buttons.
     */
    public function delete(string $uuid): void
    {
        // Get new values for the cookie
        $cookie = collect(self::getCookie())
            ->map(function ($item) use ($uuid) {
                return $item !== $uuid
                ? $item
                : null;
            })
            ->filter()
            ->unique()
            ->values()
            ->toArray();

        // Delete cookie
        Cookie::forget(config('cookie.offers'));

        // Store the cookie
        Cookie::queue(
            Cookie::make(
                config('cookie.offers'),
                json_encode($cookie),
                $this->lifetime
            )
        );

        // Call to the Saved component
        $this->emitTo('buttons', 'updated');

        // Get the item list
        $this->list = $cookie;

        // Update totals
        $this->total = count($this->list);

        // A little delay
        sleep(1);
    }

    /**
     * Store the buttom in the cookie.
     * Update the cookie.
     */
    public function update(): void
    {
        $this->updateElements();
    }

    /**
     * Search all the cookies in the database.
     * This is for list all the stored cookies.
     */
    private function fromDatabase()
    {
        $offers = self::getCookie();

        return $offers
            ? Offer::whereIn('id', $offers)->get()
            : collect([]);
    }

    /**
     * Update all the elements related with the cookie.
     */
    private function updateElements(): void
    {
        $this->list = self::getCookie();
        $this->total = count($this->list);
        $this->showModal = false;
    }
}
