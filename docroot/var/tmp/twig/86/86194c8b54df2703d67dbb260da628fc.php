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

/* @bundles/EmailBundle/Tests/Validator/MultipleEmailsValidValidatorTest.php */
class __TwigTemplate_eb7fd528ace0097c84a67d7cf8689989 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Validator;

use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Mautic\\EmailBundle\\Validator\\MultipleEmailsValidValidator;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface;

class MultipleEmailsValidValidatorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoEmailsProvided(): void
    {
        \$emailValidatorMock = \$this->createMock(EmailValidator::class);
        \$constraintMock     = \$this->createMock(Constraint::class);

        \$emailValidatorMock->expects(\$this->never())
            ->method('validate');

        \$multipleEmailsValidValidator = new MultipleEmailsValidValidator(\$emailValidatorMock);

        \$multipleEmailsValidValidator->validate(null, \$constraintMock);
    }

    public function testValidEmails(): void
    {
        \$emailValidatorMock = \$this->createMock(EmailValidator::class);
        \$constraintMock     = \$this->createMock(Constraint::class);

        \$emailValidatorMock->expects(\$this->exactly(2))
            ->method('validate')
            ->withConsecutive(['john@don.com'], ['don@john.com']);

        \$multipleEmailsValidValidator = new MultipleEmailsValidValidator(\$emailValidatorMock);

        \$emails = 'john@don.com, don@john.com';
        \$multipleEmailsValidValidator->validate(\$emails, \$constraintMock);
    }

    public function testNotValidEmails(): void
    {
        \$emailValidatorMock                      = \$this->createMock(EmailValidator::class);
        \$constraintMock                          = \$this->createMock(Constraint::class);
        \$executionContextInterfaceMock           = \$this->createMock(ExecutionContextInterface::class);
        \$constraintViolationBuilderInterfaceMock = \$this->createMock(ConstraintViolationBuilderInterface::class);

        \$emailValidatorMock->expects(\$this->exactly(1))
            ->method('validate')
            ->with('xxx')
            ->willThrowException(new InvalidEmailException('xxx'));

        \$executionContextInterfaceMock->expects(\$this->once())
            ->method('buildViolation')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('addViolation')
            ->with();

        \$multipleEmailsValidValidator = new MultipleEmailsValidValidator(\$emailValidatorMock);
        \$multipleEmailsValidValidator->initialize(\$executionContextInterfaceMock);

        \$emails = 'xxx';
        \$multipleEmailsValidValidator->validate(\$emails, \$constraintMock);
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
        return "@bundles/EmailBundle/Tests/Validator/MultipleEmailsValidValidatorTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Validator/MultipleEmailsValidValidatorTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Validator/MultipleEmailsValidValidatorTest.php");
    }
}
