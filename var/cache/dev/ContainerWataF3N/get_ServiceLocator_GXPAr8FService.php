<?php

namespace ContainerWataF3N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GXPAr8FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GXPAr8F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GXPAr8F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authorRepository' => ['privates', 'App\\Repository\\AuthorRepository', 'getAuthorRepositoryService', true],
            'sluggerInterface' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'authorRepository' => 'App\\Repository\\AuthorRepository',
            'sluggerInterface' => '?',
        ]);
    }
}
