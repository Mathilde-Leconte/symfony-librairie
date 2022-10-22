<?php

namespace ContainerWataF3N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QqyXMcXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qqyXMcX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qqyXMcX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carousel' => ['privates', '.errored..service_locator.qqyXMcX.App\\Entity\\Carousel', NULL, 'Cannot autowire service ".service_locator.qqyXMcX": it references class "App\\Entity\\Carousel" but no such service exists.'],
        ], [
            'carousel' => 'App\\Entity\\Carousel',
        ]);
    }
}
