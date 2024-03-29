<?php

namespace ContainerUzKUnxt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_RouterMatchService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($container->services['router'] ?? self::getRouterService($container)), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['router.expression_language_provider'] ?? self::getRouter_ExpressionLanguageProviderService($container));
        }, 1));

        $instance->setName('router:match');
        $instance->setDescription('Help debug routes by simulating a path info match');

        return $instance;
    }
}
