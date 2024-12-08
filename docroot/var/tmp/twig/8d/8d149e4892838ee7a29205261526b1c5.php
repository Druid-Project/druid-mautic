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

/* @bundles/AssetBundle/ErrorHandler/DropzoneErrorHandler.php */
class __TwigTemplate_9bbe5ec50c8fe436c227cb689fa0a27b extends Template
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

namespace Mautic\\AssetBundle\\ErrorHandler;

use Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\ErrorHandlerInterface;
use Oneup\\UploaderBundle\\Uploader\\Response\\AbstractResponse;

class DropzoneErrorHandler implements ErrorHandlerInterface
{
    public function addException(AbstractResponse \$response, \\Exception \$exception): void
    {
        // HTTP status between 400 and 500 should be set here.
        // Dropzone will handle error messages itself then.
        // Unfortunatelly UploaderBundle will have this option in v 3.
        \$response['error'] = \$exception->getMessage();
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
        return "@bundles/AssetBundle/ErrorHandler/DropzoneErrorHandler.php";
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
        return new Source("", "@bundles/AssetBundle/ErrorHandler/DropzoneErrorHandler.php", "/app/docroot/app/bundles/AssetBundle/ErrorHandler/DropzoneErrorHandler.php");
    }
}
