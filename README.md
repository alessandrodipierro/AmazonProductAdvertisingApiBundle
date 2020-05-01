# AmazonProductAdvertisingApiBundle

A symfony wrapper bundle for Amazon Product Advertising API.

 ## Install
 
 Via Composer
 
 ``` bash
 composer require alessandrodipierro/amazon-product-advertising-api-bundle
 ```
 
  ## Configure the bundle
  
  This bundle was designed to just work out of the box. The only thing you have to configure in order to get this bundle up and running is your API [token](https://dev.bitly.com/v4/#section/Authentication).
  
  ```yaml
  # config/packages/amazon_pa_api.yaml

  amazon_product_advertising_api:
    api_key: 'API_KEY_HERE'
    api_secret: 'API_KEY_HERE'
    host: 'HOST_HERE'
    region: 'REGION_HERE'
  ```
Add bundle to the bundles configuration.
  ```php
  # config/bundles.php

[ AlessandroDiPierro\AmazonProductAdvertisingApiBundle\AmazonProductAdvertisingApiBundle::class => ['all' => true]]
  ```
