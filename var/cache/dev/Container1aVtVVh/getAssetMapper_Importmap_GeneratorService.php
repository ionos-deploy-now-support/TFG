<?php

namespace Container1aVtVVh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.generator' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.importmap.generator'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapGenerator(($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['asset_mapper.compiled_asset_mapper_config_reader'] ??= new \Symfony\Component\AssetMapper\CompiledAssetMapperConfigReader('E:\\TFG/public/assets')), ($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')));
    }
}
