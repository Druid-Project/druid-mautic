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

/* @bundles/ReportBundle/Tests/Scheduler/Option/ExportOptionTest.php */
class __TwigTemplate_17ecad0e2061c1ff704c8a3d371e535d extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Option;

use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;

class ExportOptionTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testReportId(): void
    {
        \$exportOption = new ExportOption(11);

        \$this->assertSame(11, \$exportOption->getReportId());
    }

    public function testNoReportId(): void
    {
        \$exportOption = new ExportOption(null);

        \$this->assertSame(0, \$exportOption->getReportId());
    }

    public function testBadFormatOfId(): void
    {
        \$this->expectException(\\InvalidArgumentException::class);

        new ExportOption('string');
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
        return "@bundles/ReportBundle/Tests/Scheduler/Option/ExportOptionTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Option/ExportOptionTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Scheduler/Option/ExportOptionTest.php");
    }
}
