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

/* @bundles/LeadBundle/Tests/Validator/Constraints/LengthTest.php */
class __TwigTemplate_afe9d4866f7349a7f5e153c7cd64b380 extends Template
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

use Mautic\\LeadBundle\\Validator\\Constraints\\Length;
use Mautic\\LeadBundle\\Validator\\Constraints\\LengthValidator;

class LengthTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testValidateBy(): void
    {
        \$constraint = new Length(['min' => 3]);
        \$this->assertEquals(LengthValidator::class, \$constraint->validatedBy());
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
        return "@bundles/LeadBundle/Tests/Validator/Constraints/LengthTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Validator/Constraints/LengthTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Validator/Constraints/LengthTest.php");
    }
}
