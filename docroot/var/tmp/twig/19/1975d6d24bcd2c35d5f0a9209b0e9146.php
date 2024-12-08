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

/* @bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnDispatcherTest.php */
class __TwigTemplate_9605a25e3ad875a6ce3ae8011afb0c36 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field\\Dispatcher;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnDispatcher;
use Mautic\\LeadBundle\\Field\\Event\\AddColumnEvent;
use Mautic\\LeadBundle\\Field\\Event\\UpdateColumnEvent;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException;
use Mautic\\LeadBundle\\Field\\Settings\\BackgroundSettings;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldColumnDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoBackground(): void
    {
        \$dispatcher         = \$this->createMock(EventDispatcherInterface::class);
        \$backgroundSettings = \$this->createMock(BackgroundSettings::class);
        \$leadField          = new LeadField();

        \$backgroundSettings->expects(\$this->once())
            ->method('shouldProcessColumnChangeInBackground')
            ->willReturn(false);

        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->isInstanceOf(AddColumnEvent::class),
                'mautic.lead_field_pre_add_column',
            );

        \$fieldColumnDispatcher = new FieldColumnDispatcher(\$dispatcher, \$backgroundSettings);

        \$fieldColumnDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }

    public function testStopPropagation(): void
    {
        \$leadField          = new LeadField();
        \$dispatcher         = \$this->createMock(EventDispatcherInterface::class);
        \$backgroundSettings = \$this->createMock(BackgroundSettings::class);

        \$backgroundSettings->expects(\$this->once())
            ->method('shouldProcessColumnChangeInBackground')
            ->willReturn(true);

        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(fn (AddColumnEvent \$event) => \$event instanceof AddColumnEvent),
                'mautic.lead_field_pre_add_column'
            );

        \$fieldColumnDispatcher = new FieldColumnDispatcher(\$dispatcher, \$backgroundSettings);

        \$this->expectException(AbortColumnCreateException::class);
        \$this->expectExceptionMessage('Column change will be processed in background job');

        \$fieldColumnDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }

    public function testStopPropagationUpdate(): void
    {
        \$leadField = new LeadField();

        \$dispatcher         = \$this->createMock(EventDispatcherInterface::class);
        \$backgroundSettings = \$this->createMock(BackgroundSettings::class);

        \$backgroundSettings
            ->expects(\$this->once())
            ->method('shouldProcessColumnChangeInBackground')
            ->willReturn(true);

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(fn (UpdateColumnEvent \$event) => \$event instanceof UpdateColumnEvent),
                'mautic.lead_field_pre_update_column',
            );

        \$fieldColumnDispatcher = new FieldColumnDispatcher(\$dispatcher, \$backgroundSettings);

        \$this->expectException(AbortColumnUpdateException::class);
        \$this->expectExceptionMessage('Column change will be processed in background job');

        \$fieldColumnDispatcher->dispatchPreUpdateColumnEvent(\$leadField);
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
        return "@bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnDispatcherTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnDispatcherTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnDispatcherTest.php");
    }
}
