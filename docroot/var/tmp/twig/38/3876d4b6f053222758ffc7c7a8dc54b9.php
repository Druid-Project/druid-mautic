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

/* @bundles/ReportBundle/Tests/Model/ExportResponseTest.php */
class __TwigTemplate_3ab2468f2ee142cf9275b0de8948d8da extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Model;

use Mautic\\ReportBundle\\Model\\ExportResponse;
use Symfony\\Component\\HttpFoundation\\Response;

class ExportResponseTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testResponse(): void
    {
        \$responce = new Response();
        ExportResponse::setResponseHeaders(\$responce, 'fileName.csv');

        \$this->assertSame('application/octet-stream', \$responce->headers->get('Content-Type'));
        \$this->assertSame('attachment; filename=\"fileName.csv\"', \$responce->headers->get('Content-Disposition'));
        \$this->assertSame('must-revalidate, private', \$responce->headers->get('Cache-Control'));
        \$this->assertSame('public', \$responce->headers->get('Pragma'));
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
        return "@bundles/ReportBundle/Tests/Model/ExportResponseTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ExportResponseTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Model/ExportResponseTest.php");
    }
}
