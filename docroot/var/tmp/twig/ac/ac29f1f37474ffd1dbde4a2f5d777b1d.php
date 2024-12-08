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

/* @bundles/LeadBundle/Field/Dispatcher/FieldColumnDispatcher.php */
class __TwigTemplate_12871ab8b969becba615e77547aba8c3 extends Template
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
use Mautic\\LeadBundle\\Field\\Event\\AddColumnEvent;
use Mautic\\LeadBundle\\Field\\Event\\UpdateColumnEvent;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException;
use Mautic\\LeadBundle\\Field\\Settings\\BackgroundSettings;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldColumnDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private BackgroundSettings \$backgroundSettings
    ) {
    }

    /**
     * @throws AbortColumnCreateException
     */
    public function dispatchPreAddColumnEvent(LeadField \$leadField): void
    {
        \$shouldProcessInBackground = \$this->backgroundSettings->shouldProcessColumnChangeInBackground();
        \$event                     = new AddColumnEvent(\$leadField, \$shouldProcessInBackground);

        \$this->dispatcher->dispatch(\$event, LeadEvents::LEAD_FIELD_PRE_ADD_COLUMN);

        if (\$shouldProcessInBackground) {
            throw new AbortColumnCreateException('Column change will be processed in background job');
        }
    }

    /**
     * @throws AbortColumnUpdateException
     */
    public function dispatchPreUpdateColumnEvent(LeadField \$leadField): void
    {
        \$shouldProcessInBackground = \$this->backgroundSettings->shouldProcessColumnChangeInBackground();
        \$event                     = new UpdateColumnEvent(\$leadField, \$shouldProcessInBackground);

        \$this->dispatcher->dispatch(\$event, LeadEvents::LEAD_FIELD_PRE_UPDATE_COLUMN);

        if (\$event->shouldProcessInBackground()) {
            throw new AbortColumnUpdateException('Column change will be processed in background job');
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
        return "@bundles/LeadBundle/Field/Dispatcher/FieldColumnDispatcher.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Dispatcher/FieldColumnDispatcher.php", "/app/docroot/app/bundles/LeadBundle/Field/Dispatcher/FieldColumnDispatcher.php");
    }
}
