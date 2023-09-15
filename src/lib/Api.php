<?php

namespace CoinMarketCapPhpApi;

use CoinMarketCapPhpApi\Features\Cryptocurrency;
use CoinMarketCapPhpApi\Features\GlobalMetrics;
use CoinMarketCapPhpApi\Features\Partners;
use CoinMarketCapPhpApi\Features\Tools;

/**
 * Api
 *
 * @link    https://github.com/AdrianTimofti/coinmarketcap-php-api
 * @author  Adrian Timofti (https://github.com/AdrianTimofti)
 * @license https://github.com/AdrianTimofti/coinmarketcap-php-api/blob/master/LICENSE (MIT License)
 */
class Api
{
    private static $apiKey;
    private static $cryptocurrency = null;
    private static $globalMetrics = null;
    private static $tools = null;
    private static $partners = null;

    /**
     * Api constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    /**
     * @return Cryptocurrency
     */
    public static function cryptocurrency(): Cryptocurrency
    {
        self::$cryptocurrency = self::$cryptocurrency ?: new Cryptocurrency(self::$apiKey);
        return self::$cryptocurrency;
    }

    /**
     * @return GlobalMetrics
     */
    public static function globalMetrics(): GlobalMetrics
    {
        self::$globalMetrics = self::$globalMetrics ?: new GlobalMetrics(self::$apiKey);
        return self::$globalMetrics;
    }

    /**
     * @return Tools
     */
    public static function tools(): Tools
    {
        self::$tools = self::$tools ?: new Tools(self::$apiKey);
        return self::$tools;
    }

    /**
     * @return Partners
     */
    public static function partners(): Partners
    {
        self::$partners = self::$partners ?: new Partners(self::$apiKey);
        return self::$partners;
    }
}
