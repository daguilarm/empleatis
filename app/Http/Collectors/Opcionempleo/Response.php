<?php

declare(strict_types=1);

namespace App\Http\Collectors\Opcionempleo;

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

    public function __construct(protected array $query, int $page)
    {
        $this->query = [
            'keywords' => $query[0],
            'location' => $query[1] ?? '', // If empty... search in all the country
            'affid' => env('OPCIONEMPLEO_API'),
            'sort' => 'date',
            'pagesize' => 50,
            'page' => $page,
            // // Filters
            // 'contracttype' => $query[2] ?? '', // indefinido (p), autonomo (c), temporal (t), practicas/becario (i)
            // 'contractperiod' => $query[3] ?? '', // Full time (f) or part time (p)
        ];

        $this->connection = $this->connection_init();
    }

    /**
     * Generate the API url for the connection
     */
    public function apiURL(): string
    {
        // Generate the URL
        return 'http://public.api.careerjet.net/search?'.
            $this->connection_query($this->query). // All the paremeters
            '&locale_code='.$this->locale.
            '&user_ip='.$this->ip().
            '&user_agent='.$this->userAgent();
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
        $headers[] = sprintf('User-Agent: careerjet-api-client-v%s-php-v%s', $this->version, phpversion());

        return $headers;
    }
}
