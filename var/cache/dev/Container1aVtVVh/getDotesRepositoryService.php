<?php

namespace Container1aVtVVh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDotesRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\DotesRepository' shared autowired service.
     *
     * @return \App\Repository\DotesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DotesRepository'] = new \App\Repository\DotesRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
