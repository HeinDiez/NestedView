<?php

namespace ContainerTqdv9S7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YPaS_RrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YPaS.rr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YPaS.rr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'planetRepository' => ['privates', 'App\\Repository\\PlanetRepository', 'getPlanetRepositoryService', true],
            'voyageRepository' => ['privates', 'App\\Repository\\VoyageRepository', 'getVoyageRepositoryService', true],
        ], [
            'planetRepository' => 'App\\Repository\\PlanetRepository',
            'voyageRepository' => 'App\\Repository\\VoyageRepository',
        ]);
    }
}