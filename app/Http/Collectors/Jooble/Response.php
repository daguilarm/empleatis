<?php

declare(strict_types=1);

namespace App\Http\Collectors\Jooble;

use App\Http\Collectors\_Traits\Connectable;
use App\Http\Collectors\_Traits\Requestable;
use App\Http\Collectors\AbstractResponse;

class Response extends AbstractResponse
{
    use Connectable,
        Requestable;

    /**
     * API version
     */
    protected string $version = '3.6';

    /**
     * Partner ID
     */
    protected int $partner = 1;

    /**
     * Set connection
     */
    protected object $connection;

    public function __construct(protected array $query, int $page)
    {
        $this->query = [
            'keywords' => $query[0],
            'location' => '', // If empty... search in all the country
            'page' => $page,
        ];

        $this->connection = $this->connection_init();
    }

    /**
     * Generate the API url for the connection
     */
    public function apiURL(): string
    {
        // Generate the URL
        return 'https://es.jooble.org/api/'.env('JOOBLE_API');
    }

    /**
     * Get the request headers
     *
     * @param  string  $page
     * @return array
     */
    public function apiHeaders(array $headers = []): array
    {
        // Set the headers
        $headers[] = 'Referer: '.request()->root();

        return $headers;
    }
}
