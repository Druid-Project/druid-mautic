<?php

namespace ContainerYDI2OxB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_ChunkManagerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'oneup_uploader.chunk_manager' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['oneup_uploader.chunk_manager'] = new \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager($container->getParameter('oneup_uploader.chunks'), new \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage(($container->targetDir.''.'/uploader/chunks')));
    }
}
