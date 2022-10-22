<?php

namespace ContainerW25aViW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VH0EHfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VH_0EHf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VH_0EHf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'book' => ['privates', '.errored..service_locator.VH_0EHf.App\\Entity\\Book', NULL, 'Cannot autowire service ".service_locator.VH_0EHf": it references class "App\\Entity\\Book" but no such service exists.'],
        ], [
            'book' => 'App\\Entity\\Book',
        ]);
    }
}
