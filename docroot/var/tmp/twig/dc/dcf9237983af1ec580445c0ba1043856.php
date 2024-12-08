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

/* @bundles/CampaignBundle/EventListener/CampaignEventDeleteSubscriber.php */
class __TwigTemplate_56c390ac666fbed25c3ec4bbf60d6937 extends Template
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

namespace Mautic\\CampaignBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Event\\DeleteCampaign;
use Mautic\\CampaignBundle\\Event\\DeleteEvent;
use Mautic\\CampaignBundle\\Helper\\CampaignConfig;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CampaignBundle\\Model\\EventModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignEventDeleteSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LeadEventLogRepository \$leadEventLogRepository,
        private CampaignConfig \$campaignConfig,
        private CampaignModel \$campaignModel,
        private EventModel \$eventModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::ON_CAMPAIGN_DELETE => ['onCampaignDelete', 0],
            CampaignEvents::ON_EVENT_DELETE    => ['onEventDelete', 0],
        ];
    }

    public function onCampaignDelete(DeleteCampaign \$event): void
    {
        if (\$this->campaignConfig->shouldDeleteEventLogInBackground()) {
            return;
        }

        \$campaignId = \$event->getCampaign()->getId();
        \$this->leadEventLogRepository->removeEventLogsByCampaignId(\$campaignId);
        \$this->eventModel->deleteEventsByCampaignId(\$campaignId);
        \$this->campaignModel->deleteCampaign(\$event->getCampaign());
    }

    public function onEventDelete(DeleteEvent \$event): void
    {
        if (\$this->campaignConfig->shouldDeleteEventLogInBackground()) {
            return;
        }
        \$eventIds   = \$event->getEventIds();
        \$this->leadEventLogRepository->removeEventLogs(\$eventIds);
        \$this->eventModel->deleteEventsByEventIds(\$eventIds);
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
        return "@bundles/CampaignBundle/EventListener/CampaignEventDeleteSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/CampaignEventDeleteSubscriber.php", "/app/docroot/app/bundles/CampaignBundle/EventListener/CampaignEventDeleteSubscriber.php");
    }
}
