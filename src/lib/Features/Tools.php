<?php

namespace CoinMarketCapPhpApi\Features;

use CoinMarketCapPhpApi\Utils\ApiRequest;

/**
 * Tools
 *
 * @link    https://github.com/AdrianTimofti/coinmarketcap-php-api
 * @author  Adrian Timofti (https://github.com/AdrianTimofti)
 * @license https://github.com/AdrianTimofti/coinmarketcap-php-api/blob/master/LICENSE (MIT License)
 */
class Tools extends ApiRequest
{
    /**
     * Tools constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
        self::$apiPath .= 'tools' . '/';
    }

    /**
     * @param array $params ["amount", "id", "symbol", "time", "convert", "convert_id" ]
     * @return mixed
     * @throws \Exception
     */
    public function priceConversion($params = [])
    {
        return $this->get('price-conversion', $params);
    }
}
