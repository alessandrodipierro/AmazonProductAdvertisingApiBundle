<?php

namespace AlessandroDiPierro\AmazonProductAdvertisingApiBundle\DependencyInjection\Factory;

use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use GuzzleHttp\Client;

class ApiFactory
{
    /**
     * @param array $config
     * @return DefaultApi
     */
    public function getApi(array $config = [])
    {
        $apiConfig = new Configuration();
        $apiConfig->setAccessKey($config['api_key'])
            ->setSecretKey($config['api_secret'])
            ->setHost($config['host'])
            ->setRegion($config['region']);

        return new DefaultApi(new Client([
            'config' => [
                'curl' => [
                    CURLOPT_HEADER => false,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_COOKIESESSION => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT => 10
                ]
            ]]), $apiConfig);
    }
}