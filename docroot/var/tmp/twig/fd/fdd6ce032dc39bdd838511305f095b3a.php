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

/* @bundles/LeadBundle/Tests/Provider/FormAdjustmentsProviderTest.php */
class __TwigTemplate_a2b8c517efdb119a09c94c374998be7c extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Provider;

use Mautic\\LeadBundle\\Event\\FormAdjustmentEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Provider\\FormAdjustmentsProvider;
use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormInterface;

final class FormAdjustmentsProviderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&EventDispatcherInterface
     */
    private MockObject \$dispatcher;

    /**
     * @var MockObject&FormInterface<mixed>
     */
    private MockObject \$form;

    private FormAdjustmentsProvider \$provider;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$this->form       = \$this->createMock(FormInterface::class);
        \$this->provider   = new FormAdjustmentsProvider(\$this->dispatcher);
    }

    public function testAdjustForm(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (FormAdjustmentEvent \$event) {
                    \$this->assertSame(\$this->form, \$event->getForm());
                    \$this->assertSame('email', \$event->getFieldAlias());
                    \$this->assertSame('lead', \$event->getFieldObject());
                    \$this->assertSame(OperatorOptions::EQUAL_TO, \$event->getOperator());
                    \$this->assertSame('text', \$event->getFieldType());

                    return true;
                }),
                LeadEvents::ADJUST_FILTER_FORM_TYPE_FOR_FIELD
            );

        \$this->provider->adjustForm(
            \$this->form,
            'email',
            'lead',
            OperatorOptions::EQUAL_TO,
            ['properties' => ['type' => 'text']]
        );
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
        return "@bundles/LeadBundle/Tests/Provider/FormAdjustmentsProviderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Provider/FormAdjustmentsProviderTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Provider/FormAdjustmentsProviderTest.php");
    }
}
