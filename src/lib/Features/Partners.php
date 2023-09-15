<?php

namespace CoinMarketCapPhpApi\Features;

use CoinMarketCapPhpApi\Utils\ApiRequest;

/**
 * Partners
 *
 * @link    https://github.com/AdrianTimofti/coinmarketcap-php-api
 * @author  Adrian Timofti (https://github.com/AdrianTimofti)
 * @license https://github.com/AdrianTimofti/coinmarketcap-php-api/blob/master/LICENSE (MIT License)
 */
class Partners extends ApiRequest
{
    /**
     * Partners constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
        self::$apiPath .= 'partners' . '/';
    }

    /**
     * @param array $params ["start", "limit", "aux" ]
     * @return mixed
     * @throws \Exception
     */
    public function flipsideFCASListingLatest($params = [])
    {
        return $this->get('flipside-crypto/fcas/listings/latest', $params);
    }

    /**
     * @param array $params ["id", "slug", "symbol", "aux" ]
     * @return mixed
     * @throws \Exception
     */
    public function flipsideFCASQuotesLatest($params = [])
    {
        return $this->get('flipside-crypto/fcas/quotes/latest', $params);
    }
}
