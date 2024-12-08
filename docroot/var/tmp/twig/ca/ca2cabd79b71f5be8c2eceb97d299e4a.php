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

/* @bundles/LeadBundle/Tests/Entity/CompanyTest.php */
class __TwigTemplate_2c009f55cf3267db1de89a3a127dfee6 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\Company;

class CompanyTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testChangingPropertiesHydratesFieldChanges(): void
    {
        \$email    = 'foo@bar.com';
        \$company  = new Company();
        \$company->addUpdatedField('email', \$email);
        \$changes = \$company->getChanges();

        \$this->assertFalse(empty(\$changes['fields']['email']));

        \$this->assertEquals(\$email, \$changes['fields']['email'][1]);
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
        return "@bundles/LeadBundle/Tests/Entity/CompanyTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/CompanyTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/CompanyTest.php");
    }
}
