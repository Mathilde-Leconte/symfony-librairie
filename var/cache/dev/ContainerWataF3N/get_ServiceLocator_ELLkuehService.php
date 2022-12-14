<?php

namespace ContainerWataF3N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ELLkuehService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ELLkueh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ELLkueh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'home' => ['privates', '.errored..service_locator.ELLkueh.App\\Entity\\Home', NULL, 'Cannot autowire service ".service_locator.ELLkueh": it references class "App\\Entity\\Home" but no such service exists.'],
        ], [
            'home' => 'App\\Entity\\Home',
        ]);
    }
}
