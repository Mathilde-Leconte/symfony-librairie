<?php

namespace ContainerWataF3N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CUiIGOQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cUiIGOQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cUiIGOQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'home' => ['privates', '.errored..service_locator.cUiIGOQ.App\\Entity\\Home', NULL, 'Cannot autowire service ".service_locator.cUiIGOQ": it references class "App\\Entity\\Home" but no such service exists.'],
            'homeRepository' => ['privates', 'App\\Repository\\HomeRepository', 'getHomeRepositoryService', true],
        ], [
            'home' => 'App\\Entity\\Home',
            'homeRepository' => 'App\\Repository\\HomeRepository',
        ]);
    }
}
