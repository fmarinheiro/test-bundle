<?php

namespace Fm\TestBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('fm_test');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('level3')
                    ->children()
                        ->integerNode('fm_id')->end()
                        ->scalarNode('fm_secret')->end()
                    ->end()
                ->end() // twitter
            ->end()
        ;

        return $treeBuilder;
    }
}