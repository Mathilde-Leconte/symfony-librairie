<?php

namespace ContainerW25aViW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminBookCategoryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdminBookCategoryController' shared autowired service.
     *
     * @return \App\Controller\AdminBookCategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdminBookCategoryController.php';

        $container->services['App\\Controller\\AdminBookCategoryController'] = $instance = new \App\Controller\AdminBookCategoryController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\AdminBookCategoryController', $container));

        return $instance;
    }
}