<?php

namespace ContainerTqdv9S7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPagerfanta_TwigRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pagerfanta.twig_runtime' shared service.
     *
     * @return \Pagerfanta\Twig\Extension\PagerfantaRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/twig/Extension/PagerfantaRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/core/View/ViewFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/babdev/pagerfanta-bundle/src/View/ContainerBackedImmutableViewFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/core/RouteGenerator/RouteGeneratorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/babdev/pagerfanta-bundle/src/RouteGenerator/RequestAwareRouteGeneratorFactory.php';

        return $container->privates['pagerfanta.twig_runtime'] = new \Pagerfanta\Twig\Extension\PagerfantaRuntime('default', new \BabDev\PagerfantaBundle\View\ContainerBackedImmutableViewFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'default' => ['privates', 'pagerfanta.view.default', 'getPagerfanta_View_DefaultService', true],
            'foundation6' => ['privates', 'pagerfanta.view.foundation6', 'getPagerfanta_View_Foundation6Service', true],
            'semantic_ui' => ['privates', 'pagerfanta.view.semantic_ui', 'getPagerfanta_View_SemanticUiService', true],
            'twig' => ['privates', 'pagerfanta.view.twig', 'getPagerfanta_View_TwigService', true],
            'twitter_bootstrap' => ['privates', 'pagerfanta.view.twitter_bootstrap', 'getPagerfanta_View_TwitterBootstrapService', true],
            'twitter_bootstrap3' => ['privates', 'pagerfanta.view.twitter_bootstrap3', 'getPagerfanta_View_TwitterBootstrap3Service', true],
            'twitter_bootstrap4' => ['privates', 'pagerfanta.view.twitter_bootstrap4', 'getPagerfanta_View_TwitterBootstrap4Service', true],
            'twitter_bootstrap5' => ['privates', 'pagerfanta.view.twitter_bootstrap5', 'getPagerfanta_View_TwitterBootstrap5Service', true],
        ], [
            'default' => '?',
            'foundation6' => '?',
            'semantic_ui' => '?',
            'twig' => '?',
            'twitter_bootstrap' => '?',
            'twitter_bootstrap3' => '?',
            'twitter_bootstrap4' => '?',
            'twitter_bootstrap5' => '?',
        ]), ['default' => 'pagerfanta.view.default', 'foundation6' => 'pagerfanta.view.foundation6', 'semantic_ui' => 'pagerfanta.view.semantic_ui', 'twitter_bootstrap' => 'pagerfanta.view.twitter_bootstrap', 'twitter_bootstrap3' => 'pagerfanta.view.twitter_bootstrap3', 'twitter_bootstrap4' => 'pagerfanta.view.twitter_bootstrap4', 'twitter_bootstrap5' => 'pagerfanta.view.twitter_bootstrap5', 'twig' => 'pagerfanta.view.twig']), new \BabDev\PagerfantaBundle\RouteGenerator\RequestAwareRouteGeneratorFactory(($container->services['router'] ?? self::getRouterService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService'))));
    }
}