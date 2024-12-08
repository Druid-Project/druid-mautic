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

/* @bundles/LeadBundle/Tests/Event/CompanyMergeEventTest.php */
class __TwigTemplate_1db218a12f2bc4ebf777d872272dc885 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Event\\CompanyMergeEvent;
use PHPUnit\\Framework\\TestCase;

class CompanyMergeEventTest extends TestCase
{
    public function testConstructGettersSetters(): void
    {
        \$victor  = new Company();
        \$loser   = new Company();
        \$event   = new CompanyMergeEvent(\$victor, \$loser);

        \$this->assertEquals(\$victor, \$event->getVictor());
        \$this->assertEquals(\$loser, \$event->getLoser());
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
        return "@bundles/LeadBundle/Tests/Event/CompanyMergeEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/CompanyMergeEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/CompanyMergeEventTest.php");
    }
}
