<?php

namespace AlessandroDiPierro\AmazonProductAdvertisingApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('amazon_product_advertising_api');
        $rootNode = \method_exists($builder, 'getRootNode') ? $builder->getRootNode() : $builder->root('amazon_product_advertising_api');

        $rootNode
            ->children()
            ->scalarNode('api_key')->isRequired()->end()
            ->scalarNode('api_secret')->isRequired()->end()
            ->scalarNode('host')->isRequired()->end()
            ->scalarNode('region')->isRequired()->end();

        return $builder;
    }
}