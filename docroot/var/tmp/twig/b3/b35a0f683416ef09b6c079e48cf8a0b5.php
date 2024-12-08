<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Controller/FileController.php */
class __TwigTemplate_8938c61307a2241cda4f271415d70c9a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\Exception\\FileUploadException;
use Mautic\\CoreBundle\\Helper\\FileUploader;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class FileController extends AjaxController
{
    public const EDITOR_FROALA   = 'froala';

    public const EDITOR_CKEDITOR = 'ckeditor';

    protected \$imageMimes = [
        'image/gif',
        'image/jpeg',
        'image/pjpeg',
        'image/jpeg',
        'image/pjpeg',
        'image/png',
        'image/x-png',
    ];

    protected \$response = [];

    protected \$statusCode = Response::HTTP_OK;

    /**
     * Uploads a file.
     *
     * @throws FileUploadException
     */
    public function uploadAction(Request \$request, PathsHelper \$pathsHelper, FileUploader \$fileUploader): JsonResponse
    {
        \$editor   = \$request->get('editor', 'froala');
        \$mediaDir = \$this->getMediaAbsolutePath(\$pathsHelper);
        if (!isset(\$this->response['error'])) {
            foreach (\$request->files as \$file) {
                if (in_array(\$file->getMimeType(), \$this->imageMimes)) {
                    \$fileName = \$fileUploader->upload(\$mediaDir, \$file);
                    \$this->successfulResponse(\$request, \$fileName, \$editor);
                } else {
                    \$this->failureResponse(\$editor);
                }
            }
        }

        return \$this->sendJsonResponse(\$this->response, \$this->statusCode);
    }

    /**
     * List the files in /media directory.
     */
    public function listAction(Request \$request, PathsHelper \$pathsHelper): JsonResponse
    {
        \$fnames = scandir(\$this->getMediaAbsolutePath(\$pathsHelper));

        if (\$fnames) {
            foreach (\$fnames as \$name) {
                \$imagePath = \$this->getMediaAbsolutePath(\$pathsHelper).'/'.\$name;
                \$imageUrl  = \$this->getMediaUrl(\$request).'/'.\$name;
                if (!is_dir(\$name) && in_array(mime_content_type(\$imagePath), \$this->imageMimes)) {
                    \$this->response[] = [
                        'url'   => \$imageUrl,
                        'thumb' => \$imageUrl,
                        'name'  => \$name,
                    ];
                }
            }
        } else {
            \$this->response['error'] = 'Images folder does not exist!';
        }

        return \$this->sendJsonResponse(\$this->response, \$this->statusCode, false);
    }

    /**
     * Delete a file from /media directory.
     */
    public function deleteAction(Request \$request, PathsHelper \$pathsHelper): JsonResponse
    {
        \$src       = InputHelper::clean(\$request->request->get('src'));
        \$imagePath = \$this->getMediaAbsolutePath(\$pathsHelper).'/'.basename(\$src);

        if (!file_exists(\$imagePath)) {
            \$this->response['error'] = 'File does not exist';
            \$this->statusCode        = Response::HTTP_INTERNAL_SERVER_ERROR;
        } elseif (!is_writable(\$imagePath)) {
            \$this->response['error'] = 'File is not writable';
            \$this->statusCode        = Response::HTTP_INTERNAL_SERVER_ERROR;
        } else {
            unlink(\$imagePath);
            \$this->response['deleted'] = true;
        }

        return \$this->sendJsonResponse(\$this->response, \$this->statusCode);
    }

    /**
     * Get the Media directory full file system path.
     *
     * @return string
     */
    public function getMediaAbsolutePath(PathsHelper \$pathsHelper)
    {
        \$mediaDir = realpath(\$pathsHelper->getSystemPath('images', true));

        if (false === \$mediaDir) {
            \$this->response['error'] = 'Media dir does not exist';
            \$this->statusCode        = Response::HTTP_INTERNAL_SERVER_ERROR;
        }

        if (false === is_writable(\$mediaDir)) {
            \$this->response['error'] = 'Media dir is not writable';
            \$this->statusCode        = Response::HTTP_INTERNAL_SERVER_ERROR;
        }

        return \$mediaDir;
    }

    /**
     * Get the Media directory full file system path.
     */
    public function getMediaUrl(Request \$request): string
    {
        return \$request->getScheme().'://'
            .\$request->getHttpHost()
            .\$request->getBasePath().'/'
            .\$this->coreParametersHelper->get('image_path');
    }

    private function successfulResponse(Request \$request, string \$fileName, string \$editor): void
    {
        \$filePath = \$this->getMediaUrl(\$request).'/'.\$fileName;
        if (self::EDITOR_CKEDITOR === \$editor) {
            \$this->response['uploaded'] = true;
            \$this->response['url']      = \$filePath;
        } else {
            \$this->response['link'] = \$filePath;
        }
    }

    private function failureResponse(string \$editor): void
    {
        \$errorMsg = 'The uploaded image does not have an allowed mime type';
        if (self::EDITOR_CKEDITOR === \$editor) {
            \$this->response['uploaded']         = false;
            \$this->response['error']['message'] = \$errorMsg;
        } else {
            \$this->response['error'] = \$errorMsg;
        }
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Controller/FileController.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Controller/FileController.php", "/app/docroot/app/bundles/CoreBundle/Controller/FileController.php");
    }
}
