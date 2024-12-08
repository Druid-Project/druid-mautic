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

/* @bundles/ReportBundle/Tests/Command/ExportSchedulerCommandTest.php */
class __TwigTemplate_2ffac80890f9b71e59437139ce188fb3 extends Template
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

declare(strict_types=1);

namespace Mautic\\ReportBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class ExportSchedulerCommandTest extends MauticMysqlTestCase
{
    public function testCommand(): void
    {
        \$commandTester = \$this->testSymfonyCommand('mautic:reports:scheduler');

        Assert::assertSame(0, \$commandTester->getStatusCode());
        Assert::assertSame(\"Scheduler has finished\\n\", \$commandTester->getDisplay());
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
        return "@bundles/ReportBundle/Tests/Command/ExportSchedulerCommandTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Command/ExportSchedulerCommandTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Command/ExportSchedulerCommandTest.php");
    }
}
