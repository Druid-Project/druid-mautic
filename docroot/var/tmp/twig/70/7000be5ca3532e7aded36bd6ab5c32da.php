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

/* @bundles/LeadBundle/Tests/Event/CompanyEventTest.php */
class __TwigTemplate_db25d03ddd097a85580e12b4e646c8dd extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Event\\CompanyEvent;

class CompanyEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters(): void
    {
        \$company = new Company();
        \$isNew   = false;
        \$score   = 1;
        \$event   = new CompanyEvent(\$company, \$isNew, \$score);

        \$this->assertEquals(\$company, \$event->getCompany());
        \$this->assertEquals(\$isNew, \$event->isNew());
        \$this->assertEquals(\$score, \$event->getScore());

        \$isNew = true;
        \$event = new CompanyEvent(\$company, \$isNew, \$score);
        \$this->assertEquals(\$isNew, \$event->isNew());

        \$company2 = new Company();
        \$company2->setName('otherCompany');
        \$event->setCompany(\$company2);
        \$this->assertEquals(\$company2, \$event->getCompany());

        \$secondScore = 2;
        \$event->changeScore(\$secondScore);
        \$this->assertEquals(\$secondScore, \$event->getScore());
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
        return "@bundles/LeadBundle/Tests/Event/CompanyEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/CompanyEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/CompanyEventTest.php");
    }
}
