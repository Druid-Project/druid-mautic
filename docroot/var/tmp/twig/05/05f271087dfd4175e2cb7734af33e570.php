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

/* @bundles/AssetBundle/EventListener/UploadSubscriber.php */
class __TwigTemplate_85cba5b36e3518db00f2a1e92619f4d0 extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Validator\\FileUploadValidator;
use Oneup\\UploaderBundle\\Event\\PostUploadEvent;
use Oneup\\UploaderBundle\\Event\\ValidationEvent;
use Oneup\\UploaderBundle\\Uploader\\Exception\\ValidationException;
use Oneup\\UploaderBundle\\UploadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class UploadSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private AssetModel \$assetModel,
        private FileUploadValidator \$fileUploadValidator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            UploadEvents::POST_UPLOAD => ['onPostUpload', 0],
            UploadEvents::VALIDATION  => ['onUploadValidation', 0],
        ];
    }

    /**
     * Moves upladed file to temporary directory where it can be found later
     * and all uploaded files in there cleared. Also sets file name to the response.
     */
    public function onPostUpload(PostUploadEvent \$event): void
    {
        \$request   = \$event->getRequest()->request;
        \$response  = \$event->getResponse();
        \$tempId    = \$request->get('tempId');
        \$file      = \$event->getFile();
        \$config    = \$event->getConfig();
        \$uploadDir = \$config['storage']['directory'];
        \$tmpDir    = \$uploadDir.'/tmp/'.\$tempId;

        // Move uploaded file to temporary folder
        \$file->move(\$tmpDir);

        // Set resposnse data
        \$response['state']       = 1;
        \$response['tmpFileName'] = \$file->getBasename();
    }

    /**
     * Validates file before upload.
     *
     * @throws ValidationException
     */
    public function onUploadValidation(ValidationEvent \$event): void
    {
        \$file       = \$event->getFile();
        \$extensions = \$this->coreParametersHelper->get('allowed_extensions');
        \$maxSize    = \$this->assetModel->getMaxUploadSize('B');

        if (null === \$file) {
            return;
        }

        try {
            \$this->fileUploadValidator->checkFileSize(\$file->getSize(), \$maxSize, 'mautic.asset.asset.error.file.size');
        } catch (FileInvalidException \$e) {
            throw new ValidationException(\$e->getMessage());
        }

        try {
            \$this->fileUploadValidator->checkExtension(\$file->getExtension(), \$extensions, 'mautic.asset.asset.error.file.extension');
        } catch (FileInvalidException \$e) {
            throw new ValidationException(\$e->getMessage());
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
        return "@bundles/AssetBundle/EventListener/UploadSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/UploadSubscriber.php", "/app/docroot/app/bundles/AssetBundle/EventListener/UploadSubscriber.php");
    }
}
