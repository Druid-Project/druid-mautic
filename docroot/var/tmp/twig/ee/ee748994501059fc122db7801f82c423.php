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

/* @bundles/LeadBundle/Tests/Validator/Constraints/LengthValidatorTest.php */
class __TwigTemplate_885fca98264a394343c6663b011313f3 extends Template
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

class LengthValidatorTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public function testValidate(): void
    {
        \$constraint = new Length(['min' => 3, 'allowEmptyString' => true]);
        \$validator  = new LengthValidator();

        \$validator->validate('valid', \$constraint);
        // Not thrownig Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException
        \$validator->validate(['0', '1'], \$constraint);
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
        return "@bundles/LeadBundle/Tests/Validator/Constraints/LengthValidatorTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Validator/Constraints/LengthValidatorTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Validator/Constraints/LengthValidatorTest.php");
    }
}
