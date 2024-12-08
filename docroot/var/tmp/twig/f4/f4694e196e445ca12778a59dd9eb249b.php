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

/* @bundles/CampaignBundle/Tests/Executioner/Result/EvalutatedContactsTest.php */
class __TwigTemplate_ab03fb5e412351f311b30e9b168eb679 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Result;

use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Mautic\\LeadBundle\\Entity\\Lead;

class EvalutatedContactsTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testPassFail(): void
    {
        \$evaluatedContacts = new EvaluatedContacts();
        \$passLead          = new Lead();
        \$evaluatedContacts->pass(\$passLead);

        \$failedLead = new Lead();
        \$evaluatedContacts->fail(\$failedLead);

        \$passed = \$evaluatedContacts->getPassed();
        \$failed = \$evaluatedContacts->getFailed();

        \$this->assertCount(1, \$passed);
        \$this->assertCount(1, \$failed);

        \$this->assertTrue(\$passLead === \$passed->first());
        \$this->assertTrue(\$failedLead === \$failed->first());
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
        return "@bundles/CampaignBundle/Tests/Executioner/Result/EvalutatedContactsTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Result/EvalutatedContactsTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/Result/EvalutatedContactsTest.php");
    }
}
