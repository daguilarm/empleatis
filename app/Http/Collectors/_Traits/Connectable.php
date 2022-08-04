<?php

declare(strict_types=1);

namespace App\Http\Collectors\_Traits;

trait Connectable
{
    /**
     * Set connection headers
     */
    protected array $connection_headers;

    /**
     * Set connection content type
     */
    protected string $connection_response_type = 'Content-Type: application/json';

    /**
     * Fake referer as google
     */
    protected bool $connection_as_google = false;

    /**
     * Init the connection with the server
     */
    public function connection(): self
    {
        return $this;
    }

    /**
     * Connect with the server using GET action
     */
    public function get(): object
    {
        // Configure Curl connection
        $this->connection_configure_curl($this->connection, $this->connection_headers);

        // Execute request to the API
        $html = curl_exec($this->connection);

        // Close the connection
        $this->connection_end();

        // return the data
        return json_decode($html);
    }

    /**
     * Connect with the server using POST action
     */
    public function post(): object
    {
        // Configure Curl connection
        $this->connection_configure_curl($this->connection, $this->connection_headers);

        // Configure post
        curl_setopt($this->connection, CURLOPT_POST, 1);
        curl_setopt($this->connection, CURLOPT_POSTFIELDS, json_encode($this->query));

        // Execute request to the API
        $html = curl_exec($this->connection);

        // Close the connection
        $this->connection_end();

        // return the data
        return json_decode($html);
    }

    /**
     * Generate the headers for the CURL connection and
     * add the custom API headers
     */
    public function headers(): self
    {
        // Generate headers
        $headers[] = $this->connection_response_type;
        $headers[] = 'Cache-Control: max-age=0,no-store,no-cache';

        $this->connection_headers = $this->apiHeaders()
            ? array_merge($headers, $this->apiHeaders())
            : $headers;

        return $this;
    }

    /**
     * Renerate JSON response from server
     */
    public function asJson(): self
    {
        $this->connection_response_type = 'Content-Type: application/json';

        return $this;
    }

    /**
     * Renerate XML response from server
     */
    public function asXml(): self
    {
        $this->connection_response_type = 'Content-Type: application/xml';

        return $this;
    }

    /**
     * Fake referer as google
     */
    public function asGoogle(): self
    {
        $this->connection_as_google = true;

        return $this;
    }

    /**
     * Init connection with the server using CURL
     */
    private function connection_init(): object
    {
        // Start the connection with the server
        $connection = curl_init();

        // Send request
        curl_setopt($connection, CURLOPT_URL, $this->apiURL());

        return $connection;
    }

    /**
     * Configure CURL
     */
    private function connection_configure_curl(object $connection, array $headers): void
    {
        if ($this->connection_as_google) {
            curl_setopt($this->connection, CURLOPT_USERAGENT, 'Googlebot/2.1 (+http://www.google.com/bot.html)');
            curl_setopt($this->connection, CURLOPT_REFERER, 'http://www.google.com');
        } else {
            curl_setopt($connection, CURLOPT_REFERER, request()->root());
        }

        curl_setopt($connection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($connection, CURLOPT_ENCODING, 'gzip,deflate');
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);
    }

    /**
     * Ending connection with the server using CURL
     */
    private function connection_end(): void
    {
        // Close the connection
        curl_close($this->connection);
    }

    /**
     * Convert $query array to string for API
     */
    private function connection_query(array $query): string
    {
        return collect($query)
            ->map(function ($value, $key) {
                return sprintf('%s=%s', $key, urlencode((string) $value));
            })
            ->implode('&');
    }
}
