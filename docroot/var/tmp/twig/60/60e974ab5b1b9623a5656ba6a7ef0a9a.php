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

/* @bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressValidatorTest.php */
class __TwigTemplate_279d827ab907ca889cb73f3bf066378e extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Validator\\Constraints;

use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddress;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddressValidator;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Validator\\Context\\ExecutionContext;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class EmailAddressValidatorTest extends AbstractMauticTestCase
{
    /**
     * @dataProvider provider
     */
    public function testValidate(?string \$value, int \$expectedViolationCount): void
    {
        /** @var EmailAddressValidator \$emailAddressValidator */
        \$emailAddressValidator = static::getContainer()->get('mautic.validator.emailaddress');
        \\assert(\$emailAddressValidator instanceof EmailAddressValidator);

        \$translator = static::getContainer()->get('translator');
        \\assert(\$translator instanceof TranslatorInterface);

        \$context = new ExecutionContext(\$this->createMock(ValidatorInterface::class), null, \$translator);

        \$emailAddressValidator->initialize(\$context);
        \$emailAddressValidator->validate(\$value, new EmailAddress());

        Assert::assertSame(\$expectedViolationCount, \$context->getViolations()->count());
    }

    /**
     * @return iterable<mixed[]>
     */
    public static function Provider(): iterable
    {
        yield [null, 0];
        yield ['', 0];
        yield ['test@test.com', 0];
        yield ['testtest.com', 1];
        yield ['test@testcom', 1];
        yield ['test@test@.com', 1];
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
        return "@bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressValidatorTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressValidatorTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Validator/Constraints/EmailAddressValidatorTest.php");
    }
}
