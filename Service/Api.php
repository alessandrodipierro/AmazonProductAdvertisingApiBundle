<?php

namespace AlessandroDiPierro\AmazonProductAdvertisingApiBundle\Service;

use AlessandroDiPierro\AmazonProductAdvertisingApiBundle\DependencyInjection\Factory\ApiFactory;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Api
{
    private $config;

    public function __construct(ContainerInterface $container)
    {
        $this->config = $container->getParameter('amazon_product_advertising_api.config');
    }

    /**
     * @return DefaultApi
     */
    public function getAmazonProductAdvertisingApi()
    {
        $factory = new ApiFactory();
        return $factory->getApi($this->config);
    }
}