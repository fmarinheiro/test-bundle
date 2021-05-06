<?php

namespace Fm\TestBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class FmTestExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(dirname(__DIR__).'/Resources/config'));
        $loader->load('services.xml');

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('fm_test.some_client');
        $definition->replaceArgument(0, $config['level3']['fm_id']);
        $definition->replaceArgument(1, $config['level3']['fm_secret']);
    }
}