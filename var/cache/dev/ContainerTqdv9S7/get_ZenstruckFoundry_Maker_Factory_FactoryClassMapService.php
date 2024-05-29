<?php

namespace ContainerTqdv9S7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_Maker_Factory_FactoryClassMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.maker.factory.factory_class_map' shared service.
     *
     * @return \Zenstruck\Foundry\Bundle\Maker\Factory\FactoryClassMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Bundle/Maker/Factory/FactoryClassMap.php';

        return $container->privates['.zenstruck_foundry.maker.factory.factory_class_map'] = new \Zenstruck\Foundry\Bundle\Maker\Factory\FactoryClassMap(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Factory\\PlanetFactory'] ??= new \App\Factory\PlanetFactory());
            yield 1 => ($container->privates['App\\Factory\\VoyageFactory'] ??= new \App\Factory\VoyageFactory());
        }, 2));
    }
}
