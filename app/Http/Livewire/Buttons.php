<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\Cookiable;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;
use Livewire\Component;

class Buttons extends Component
{
    use Cookiable;

    public $uuid;

    public $cookie;

    public $showComponent;

    protected $listeners = ['updated'];

    public function mount($uuid): void
    {
        $this->uuid = $uuid;
        $this->cookie = $this->currentCookie();
        $this->showComponent = Cookie::get(config('cookie.offers')) ? true : false;
    }

    /**
     * Render the view.
     */
    public function render(): View
    {
        return view('components.livewire.buttons');
    }

    /**
     * Store the cookie and update the saved buttons.
     */
    public function storeCookie(string $uuid): void
    {
        // Store the cookie only if exists.
        // And not stored yet.
        if ($uuid && ! $this->checkCookie()) {
            // Store the cookie if not on the list
            $this->storeCookieIfNotOnTheList($uuid);
        }
    }

    /**
     * Update the cookie.
     */
    public function updated(): void
    {
        $this->cookie = $this->currentCookie();
    }

    /**
     * Store the cookie if not on the list.
     */
    private function storeCookieIfNotOnTheList(string $uuid): void
    {
        // Get the cookie
        $cookie = $this->getCookie();

        // Add the cookie to the array
        array_push($cookie, $uuid);

        // Create a new cookie with the new values
        Cookie::queue(
            Cookie::make(
                config('cookie.offers'),
                json_encode($cookie),
                $this->lifetime
            )
        );

        // Call to the Saved component
        // It is time to update...
        $this->emitTo('saved', 'cookieAdded', true);

        // A little delay
        sleep(1);

        // Update the cookie value for the view
        $this->cookie = $uuid;
    }

    /**
     * Check if the current button has been added to the cookie.
     */
    private function checkCookie(): bool
    {
        $cookie = $this->getCookie();

        return in_array($this->uuid, $cookie)
            ? true
            : false;
    }

    /**
     * Get the current cookie
     */
    private function currentCookie(): string
    {
        return $this->checkCookie()
            ? $this->uuid
            : 'empty-cookie';
    }
}
