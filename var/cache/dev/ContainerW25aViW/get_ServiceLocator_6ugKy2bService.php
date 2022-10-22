<?php

namespace ContainerW25aViW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6ugKy2bService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6ugKy2b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6ugKy2b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bookCategory' => ['privates', '.errored..service_locator.6ugKy2b.App\\Entity\\BookCategory', NULL, 'Cannot autowire service ".service_locator.6ugKy2b": it references class "App\\Entity\\BookCategory" but no such service exists.'],
        ], [
            'bookCategory' => 'App\\Entity\\BookCategory',
        ]);
    }
}