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

/* @bundles/ReportBundle/Model/ExportResponse.php */
class __TwigTemplate_9736a3654c2dc858196dbd4b9ab0a297 extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Symfony\\Component\\HttpFoundation\\Response;

class ExportResponse
{
    /**
     * @param string \$fileName
     */
    public static function setResponseHeaders(Response \$response, \$fileName): void
    {
        \$response->headers->set('Content-Type', 'application/octet-stream');
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"'.\$fileName.'\"');
        \$response->headers->set('Expires', '0');
        \$response->headers->set('Cache-Control', 'must-revalidate');
        \$response->headers->set('Pragma', 'public');
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
        return "@bundles/ReportBundle/Model/ExportResponse.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ExportResponse.php", "/app/docroot/app/bundles/ReportBundle/Model/ExportResponse.php");
    }
}
