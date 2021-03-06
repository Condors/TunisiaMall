<?php

namespace Payum\Bundle\PayumBundle\DependencyInjection\Factory\Storage;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;


class Propel1StorageFactory  extends AbstractStorageFactory
{
    
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return "propel1";
    }
        
    /**
     * {@inheritDoc}
     */
    protected function createStorage(ContainerBuilder $container, $modelClass, array $config)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../../../Resources/config/storage'));
        $loader->load('propel1.xml');
        
        $storage = new DefinitionDecorator('payum.storage.propel1');
        $storage->setPublic(true);
        $storage->replaceArgument(0, $modelClass);
        
        return $storage;
    }
}
