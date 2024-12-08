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

/* @bundles/LeadBundle/Field/Dispatcher/FieldColumnBackgroundJobDispatcher.php */
class __TwigTemplate_de4749bd8e36aba43d1b62b0fb83173d extends Template
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

namespace Mautic\\LeadBundle\\Field\\Dispatcher;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\Field\\Event\\AddColumnBackgroundEvent;
use Mautic\\LeadBundle\\Field\\Event\\UpdateColumnBackgroundEvent;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldColumnBackgroundJobDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * @throws AbortColumnCreateException
     * @throws NoListenerException
     */
    public function dispatchPreAddColumnEvent(LeadField \$leadField): void
    {
        \$action = LeadEvents::LEAD_FIELD_PRE_ADD_COLUMN_BACKGROUND_JOB;

        if (!\$this->dispatcher->hasListeners(\$action)) {
            throw new NoListenerException('There is no Listener for this event');
        }

        \$event = new AddColumnBackgroundEvent(\$leadField);

        \$this->dispatcher->dispatch(\$event, \$action);

        if (\$event->isPropagationStopped()) {
            throw new AbortColumnCreateException('Column cannot be created now');
        }
    }

    /**
     * @throws AbortColumnUpdateException
     * @throws NoListenerException
     */
    public function dispatchPreUpdateColumnEvent(LeadField \$leadField): void
    {
        \$action = LeadEvents::LEAD_FIELD_PRE_UPDATE_COLUMN_BACKGROUND_JOB;

        if (!\$this->dispatcher->hasListeners(\$action)) {
            throw new NoListenerException('There is no Listener for this event');
        }

        \$event = new UpdateColumnBackgroundEvent(\$leadField);

        \$this->dispatcher->dispatch(\$event, \$action);

        if (\$event->isPropagationStopped()) {
            throw new AbortColumnUpdateException('Column cannot be updated now');
        }
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
        return "@bundles/LeadBundle/Field/Dispatcher/FieldColumnBackgroundJobDispatcher.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Dispatcher/FieldColumnBackgroundJobDispatcher.php", "/app/docroot/app/bundles/LeadBundle/Field/Dispatcher/FieldColumnBackgroundJobDispatcher.php");
    }
}
