<?php

namespace ContainerWataF3N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DcmjZllService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dcmjZll' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dcmjZll'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carouselRepository' => ['privates', 'App\\Repository\\CarouselRepository', 'getCarouselRepositoryService', true],
            'homeRepository' => ['privates', 'App\\Repository\\HomeRepository', 'getHomeRepositoryService', true],
        ], [
            'carouselRepository' => 'App\\Repository\\CarouselRepository',
            'homeRepository' => 'App\\Repository\\HomeRepository',
        ]);
    }
}