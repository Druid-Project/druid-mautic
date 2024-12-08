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

/* @bundles/LeadBundle/Tests/Event/FormAdjustmentEventTest.php */
class __TwigTemplate_4d1e324090c43c03f06a88364432af60 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\FormAdjustmentEvent;
use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormInterface;

final class FormAdjustmentEventTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&FormInterface<FormInterface<mixed>>
     */
    private MockObject \$form;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->form = \$this->createMock(FormInterface::class);
    }

    public function testConstructGettersSetters(): void
    {
        \$alias        = 'email';
        \$object       = 'lead';
        \$operator     = OperatorOptions::EQUAL_TO;
        \$fieldDetails = [
            'properties' => [
                'type' => 'text',
                'list' => ['one', 'two'],
            ],
        ];
        \$event = new FormAdjustmentEvent(\$this->form, \$alias, \$object, \$operator, \$fieldDetails);

        \$this->assertSame(\$this->form, \$event->getForm());
        \$this->assertSame(\$alias, \$event->getFieldAlias());
        \$this->assertSame(\$object, \$event->getFieldObject());
        \$this->assertSame(\$operator, \$event->getOperator());
        \$this->assertSame(\$fieldDetails, \$event->getFieldDetails());
        \$this->assertSame('text', \$event->getFieldType());
        \$this->assertSame(['one', 'two'], \$event->getFieldChoices());
        \$this->assertFalse(\$event->filterShouldBeDisabled());
        \$this->assertFalse(\$event->operatorIsOneOf(OperatorOptions::LESS_THAN));
        \$this->assertFalse(\$event->operatorIsOneOf(OperatorOptions::LESS_THAN, OperatorOptions::NOT_EQUAL_TO));
        \$this->assertTrue(\$event->operatorIsOneOf(OperatorOptions::LESS_THAN, OperatorOptions::EQUAL_TO));
        \$this->assertFalse(\$event->fieldTypeIsOneOf('select'));
        \$this->assertTrue(\$event->fieldTypeIsOneOf('select', 'text'));
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
        return "@bundles/LeadBundle/Tests/Event/FormAdjustmentEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/FormAdjustmentEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/FormAdjustmentEventTest.php");
    }
}
