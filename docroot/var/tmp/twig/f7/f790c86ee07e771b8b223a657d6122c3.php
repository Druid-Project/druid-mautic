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

/* @bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressTest.php */
class __TwigTemplate_61c383cbc5506275313c2f22048efa79 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Validator\\Constraints;

use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddress;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddressValidator;

class EmailAddressTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testValidateBy(): void
    {
        \$constraint = new EmailAddress();
        \$this->assertEquals(EmailAddressValidator::class, \$constraint->validatedBy());
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
        return "@bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressTest.php");
    }
}
