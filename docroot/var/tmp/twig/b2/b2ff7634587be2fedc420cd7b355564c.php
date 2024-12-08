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

/* @bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnBackgroundJobDispatcherTest.php */
class __TwigTemplate_e3b8b710c411584e58cddd7c9a5ce0d5 extends Template
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
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnBackgroundJobDispatcher;
use Mautic\\LeadBundle\\Field\\Event\\AddColumnBackgroundEvent;
use Mautic\\LeadBundle\\Field\\Event\\UpdateColumnBackgroundEvent;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldColumnBackgroundJobDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoListener(): void
    {
        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(false);
        \$dispatcher
            ->expects(\$this->never())
            ->method('dispatch');

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$leadField = new LeadField();

        \$this->expectException(NoListenerException::class);
        \$this->expectExceptionMessage('There is no Listener for this event');

        \$fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }

    public function testNoListenerUpdate(): void
    {
        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(false);
        \$dispatcher
            ->expects(\$this->never())
            ->method('dispatch');

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$leadField = new LeadField();

        \$this->expectException(NoListenerException::class);
        \$this->expectExceptionMessage('There is no Listener for this event');

        \$fieldColumnBackgroundJobDispatcher->dispatchPreUpdateColumnEvent(\$leadField);
    }

    public function testNormalProcess(): void
    {
        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(true);

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->isInstanceOf(AddColumnBackgroundEvent::class),
                'mautic.lead_field_pre_add_column_background_job',
            );

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$leadField = new LeadField();

        \$fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }

    public function testNormalProcessUpdate(): void
    {
        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(true);

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->isInstanceOf(UpdateColumnBackgroundEvent::class),
                'mautic.lead_field_pre_update_column_background_job',
            );

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$leadField = new LeadField();

        \$fieldColumnBackgroundJobDispatcher->dispatchPreUpdateColumnEvent(\$leadField);
    }

    public function testStopPropagation(): void
    {
        \$leadField = new LeadField();

        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(true);

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (\$event) {
                    /* @var AddColumnBackgroundEvent \$event */
                    \$event->stopPropagation();

                    return \$event instanceof AddColumnBackgroundEvent;
                }),
                'mautic.lead_field_pre_add_column_background_job'
            );

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$this->expectException(AbortColumnCreateException::class);
        \$this->expectExceptionMessage('Column cannot be created now');

        \$fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }

    public function testStopPropagationUpdate(): void
    {
        \$leadField = new LeadField();

        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(true);

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (\$event) {
                    /* @var AddColumnBackgroundEvent \$event */
                    \$event->stopPropagation();

                    return \$event instanceof UpdateColumnBackgroundEvent;
                }),
                'mautic.lead_field_pre_update_column_background_job',
            );

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$this->expectException(AbortColumnUpdateException::class);
        \$this->expectExceptionMessage('Column cannot be updated now');

        \$fieldColumnBackgroundJobDispatcher->dispatchPreUpdateColumnEvent(\$leadField);
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
        return "@bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnBackgroundJobDispatcherTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnBackgroundJobDispatcherTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnBackgroundJobDispatcherTest.php");
    }
}
