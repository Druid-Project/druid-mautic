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

/* @bundles/LeadBundle/Tests/Form/Type/FieldTypeTest.php */
class __TwigTemplate_a3d4856d291141b1628c1ed35db963e9 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Form\\Type;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Form\\Type\\FieldType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilder;

final class FieldTypeTest extends TestCase
{
    private MockObject \$executionContext;

    private MockObject \$formInterface;

    private MockObject \$constraintViolationBuilder;

    protected function setUp(): void
    {
        \$this->executionContext           = \$this->createMock(ExecutionContextInterface::class);
        \$this->formInterface              = \$this->createMock(FormInterface::class);
        \$this->constraintViolationBuilder = \$this->createMock(ConstraintViolationBuilder::class);
    }

    public function testThatItFailsValidationIfTheDefaultValueExceedsTheFieldLengthLimit(): void
    {
        \$this->executionContext->expects(\$this->once())
            ->method('getRoot')
            ->willReturn(\$this->formInterface);

        \$leadField = new LeadField();
        \$this->formInterface->expects(\$this->once())
            ->method('getViewData')
            ->willReturn(\$leadField);

        \$limit = 100;
        \$leadField->setCharLengthLimit(\$limit);

        \$this->executionContext->expects(\$this->once())
            ->method('buildViolation')
            ->willReturn(\$this->constraintViolationBuilder);

        \$value = str_repeat('a', \$limit + 10);

        \$this->constraintViolationBuilder->expects(\$this->once())
            ->method('addViolation');

        FieldType::validateDefaultValue(\$value, \$this->executionContext);
    }

    public function testThatItPassesValidationIfTheFieldHasCorrectLength(): void
    {
        \$this->executionContext->expects(\$this->exactly(2))
            ->method('getRoot')
            ->willReturn(\$this->formInterface);

        \$leadField = new LeadField();
        \$this->formInterface->expects(\$this->exactly(2))
            ->method('getViewData')
            ->willReturn(\$leadField);

        \$limit = 100;
        \$leadField->setCharLengthLimit(\$limit);

        \$this->executionContext->expects(\$this->never())
            ->method('buildViolation')
            ->willReturn(\$this->constraintViolationBuilder);

        \$value = str_repeat('a', \$limit);

        \$this->constraintViolationBuilder->expects(\$this->never())
            ->method('addViolation');

        FieldType::validateDefaultValue(\$value, \$this->executionContext);

        \$value = str_repeat('a', \$limit - 1);
        FieldType::validateDefaultValue(\$value, \$this->executionContext);
    }

    public function testThatItDoesntValidateLengthForHtmlFields(): void
    {
        \$this->executionContext->expects(\$this->once())
            ->method('getRoot')
            ->willReturn(\$this->formInterface);

        \$leadField = new LeadField();
        \$leadField->setType('html');
        \$this->formInterface->expects(\$this->once())
            ->method('getViewData')
            ->willReturn(\$leadField);

        \$this->executionContext->expects(\$this->never())
            ->method('buildViolation')
            ->willReturn(\$this->constraintViolationBuilder);

        \$value = str_repeat('a', 1000000);

        \$this->constraintViolationBuilder->expects(\$this->never())
            ->method('addViolation');

        FieldType::validateDefaultValue(\$value, \$this->executionContext);
    }

    public function testThatItDoesntValidateLengthForTextareaFields(): void
    {
        \$this->executionContext->expects(\$this->once())
            ->method('getRoot')
            ->willReturn(\$this->formInterface);

        \$leadField = new LeadField();
        \$leadField->setType('textarea');
        \$this->formInterface->expects(\$this->once())
            ->method('getViewData')
            ->willReturn(\$leadField);

        \$this->executionContext->expects(\$this->never())
            ->method('buildViolation')
            ->willReturn(\$this->constraintViolationBuilder);

        \$value = str_repeat('a', 1000000);

        \$this->constraintViolationBuilder->expects(\$this->never())
            ->method('addViolation');

        FieldType::validateDefaultValue(\$value, \$this->executionContext);
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
        return "@bundles/LeadBundle/Tests/Form/Type/FieldTypeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/Type/FieldTypeTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Form/Type/FieldTypeTest.php");
    }
}
