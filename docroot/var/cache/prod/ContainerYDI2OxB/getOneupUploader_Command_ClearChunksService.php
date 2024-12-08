<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Command_ClearChunksService extends AppKernelProdContainer
{
    /*
     * Gets the private 'oneup_uploader.command.clear_chunks' shared service.
     *
     * @return \Oneup\UploaderBundle\Command\ClearChunkCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['oneup_uploader.command.clear_chunks'] = $instance = new \Oneup\UploaderBundle\Command\ClearChunkCommand(($container->services['oneup_uploader.chunk_manager'] ?? $container->load('getOneupUploader_ChunkManagerService')));

        $instance->setName('oneup:uploader:clear-chunks');

        return $instance;
    }
}
