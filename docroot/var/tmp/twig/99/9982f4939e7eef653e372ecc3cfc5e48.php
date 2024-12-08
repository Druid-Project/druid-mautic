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

/* @bundles/CoreBundle/Tests/Unit/Validator/EntityEventValidatorTest.php */
class __TwigTemplate_fe50060aee3ea24f91bd0f9589836cc9 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Validator;

use Mautic\\CoreBundle\\Event\\EntityValidateEvent;
use Mautic\\CoreBundle\\Validator\\EntityEvent;
use Mautic\\CoreBundle\\Validator\\EntityEventValidator;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\ConstraintValidatorInterface;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

class EntityEventValidatorTest extends TestCase
{
    private EventDispatcherInterface \$dispatcher;
    private ExecutionContextInterface \$context;
    private ConstraintValidatorInterface \$validator;

    protected function setUp(): void
    {
        \$this->context    = \$this->createMock(ExecutionContextInterface::class);
        \$this->dispatcher = new EventDispatcher();
        \$this->validator  = new EntityEventValidator(\$this->dispatcher);
        \$this->validator->initialize(\$this->context);
    }

    public function testInvalidValue(): void
    {
        \$this->expectException(UnexpectedTypeException::class);
        \$this->expectExceptionMessage('Expected argument of type \"object\", \"string\" given');

        \$this->validator->validate('invalidType', new EntityEvent());
    }

    public function testInvalidConstraint(): void
    {
        \$this->expectException(UnexpectedTypeException::class);
        \$this->expectExceptionMessageMatches('/Expected argument of type \"Mautic\\\\\\CoreBundle\\\\\\Validator\\\\\\EntityEvent\"/');

        \$this->validator->validate(new \\stdClass(), new NotBlank());
    }

    public function testEventIsDispatched(): void
    {
        \$dispatched = false;
        \$entity     = new \\stdClass();
        \$constraint = new EntityEvent();

        \$this->dispatcher->addListener(EntityValidateEvent::class, function (EntityValidateEvent \$event) use (&\$dispatched, \$entity, \$constraint) {
            \$dispatched = true;

            Assert::assertSame(\$entity, \$event->getEntity());
            Assert::assertSame(\$constraint, \$event->getConstraint());
            Assert::assertSame(\$this->context, \$event->getContext());
        });

        \$this->validator->validate(\$entity, \$constraint);

        Assert::assertTrue(\$dispatched);
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
        return "@bundles/CoreBundle/Tests/Unit/Validator/EntityEventValidatorTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Validator/EntityEventValidatorTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Validator/EntityEventValidatorTest.php");
    }
}
