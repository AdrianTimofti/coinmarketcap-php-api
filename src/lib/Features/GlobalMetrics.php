<?php

namespace CoinMarketCapPhpApi\Features;

use CoinMarketCapApi\Utils\ApiRequest;

/**
 * GlobalMetrics
 *
 * @link    https://github.com/AdrianTimofti/coinmarketcap-php-api
 * @author  Adrian Timofti (https://github.com/AdrianTimofti)
 * @license https://github.com/AdrianTimofti/coinmarketcap-php-api/blob/master/LICENSE (MIT License)
 */
class GlobalMetrics extends ApiRequest
{
    /**
     * GlobalMetrics constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
        self::$apiPath .= 'global-metrics' . '/';
    }

    /**
     * @param array $params ["convert", "convert_id"]
     * @return mixed
     * @throws \Exception
     */
    public function quotesLatest($params = [])
    {
        return $this->get('quotes/latest', $params);
    }
}
