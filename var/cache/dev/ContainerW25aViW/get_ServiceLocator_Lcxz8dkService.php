<?php

namespace ContainerW25aViW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lcxz8dkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Lcxz8dk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Lcxz8dk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'homeRepository' => ['privates', 'App\\Repository\\HomeRepository', 'getHomeRepositoryService', true],
        ], [
            'homeRepository' => 'App\\Repository\\HomeRepository',
        ]);
    }
}
