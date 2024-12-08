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

/* @bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateDefaultTest.php */
class __TwigTemplate_cc02889211c7c0703d678217e5936c1e extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator\\Date\\Other;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateDefault;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;

class DateDefaultTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateDefault::getParameterValue
     */
    public function testGetParameterValue(): void
    {
        \$dateDecorator             = \$this->createMock(DateDecorator::class);
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate([]);

        \$filterDecorator = new DateDefault(\$dateDecorator, '2018-03-02 01:02:03');

        \$this->assertEquals('2018-03-02 01:02:03', \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
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
        return "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateDefaultTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateDefaultTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateDefaultTest.php");
    }
}
