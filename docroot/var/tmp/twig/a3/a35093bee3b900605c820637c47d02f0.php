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

/* @bundles/LeadBundle/EventListener/TimelineEventLogSubscriber.php */
class __TwigTemplate_ce17105dc89d226f9fefa4ed5e5cadee extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class TimelineEventLogSubscriber implements EventSubscriberInterface
{
    use TimelineEventLogTrait;

    public function __construct(
        Translator \$translator,
        LeadEventLogRepository \$leadEventLogRepository
    ) {
        \$this->translator         = \$translator;
        \$this->eventLogRepository = \$leadEventLogRepository;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::TIMELINE_ON_GENERATE => ['onTimelineGenerate', 0],
        ];
    }

    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        \$this->addEvents(
            \$event,
            'lead.source.created',
            'mautic.lead.timeline.created_source',
            'ri-spy-line',
            null,
            null,
            'created_contact'
        );

        \$this->addEvents(
            \$event,
            'lead.source.identified',
            'mautic.lead.timeline.identified_source',
            'ri-user-6-fill',
            null,
            null,
            'identified_contact'
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
        return "@bundles/LeadBundle/EventListener/TimelineEventLogSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/TimelineEventLogSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/TimelineEventLogSubscriber.php");
    }
}
