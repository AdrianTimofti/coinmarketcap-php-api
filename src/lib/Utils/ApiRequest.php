<?php

namespace CoinMarketCapPhpApi\Utils;

use Unirest;

/**
 * ApiRequest
 *
 * @link    https://github.com/AdrianTimofti/coinmarketcap-php-api
 * @author  Adrian Timofti (https://github.com/AdrianTimofti)
 * @license https://github.com/AdrianTimofti/coinmarketcap-php-api/blob/master/LICENSE (MIT License)
 */
abstract class ApiRequest
{
    protected static $apiPath = "https://pro-api.coinmarketcap.com/v1/";
    private static $headers = [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json'
    ];

    /**
     * ApiRequest constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        self::$headers['X-CMC_PRO_API_KEY'] = $apiKey;
    }

    /**
     * @param string $endpoint
     * @param array $parameters
     * @return mixed
     * @throws \Exception
     */
    protected function get($endpoint, $parameters = [])
    {
        $apiCall = self::$apiPath . $endpoint;
        $response = Unirest\Request::get($apiCall, self::$headers, $parameters);

        if ($response->code == 200) {
            return $response->body;
        } else {
            throw new \Exception($response->body->status->error_message, $response->body->status->error_code);
        }
    }
}
