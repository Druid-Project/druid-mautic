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

/* @bundles/StageBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_33508c3f50992709796adec67dab2233 extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\PendingEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\StageBundle\\Entity\\Stage;
use Mautic\\StageBundle\\Form\\Type\\StageActionChangeType;
use Mautic\\StageBundle\\Model\\StageModel;
use Mautic\\StageBundle\\StageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CampaignSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LeadModel \$leadModel,
        private StageModel \$stageModel,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD     => ['onCampaignBuild', 0],
            StageEvents::ON_CAMPAIGN_BATCH_ACTION => ['onCampaignTriggerStageChange', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event): void
    {
        \$action = [
            'label'            => 'mautic.stage.campaign.event.change',
            'description'      => 'mautic.stage.campaign.event.change_descr',
            'batchEventName'   => StageEvents::ON_CAMPAIGN_BATCH_ACTION,
            'formType'         => StageActionChangeType::class,
            'formTheme'        => '@MauticStage/FormTheme/Action/_stageaction_properties_row.html.twig',
        ];
        \$event->addAction('stage.change', \$action);
    }

    public function onCampaignTriggerStageChange(PendingEvent \$event): void
    {
        \$logs    = \$event->getPending();
        \$config  = \$event->getEvent()->getProperties();
        \$stageId = (int) \$config['stage'];
        \$stage   = \$this->stageModel->getEntity(\$stageId);

        if (!\$stage || !\$stage->isPublished()) {
            \$event->passAllWithError(\$this->translator->trans('mautic.stage.campaign.event.stage_missing'));

            return;
        }

        foreach (\$logs as \$log) {
            \$this->changeStage(\$log, \$stage, \$event);
        }
    }

    private function changeStage(LeadEventLog \$log, Stage \$stage, PendingEvent \$pendingEvent): void
    {
        \$lead      = \$log->getLead();
        \$leadStage = (\$lead instanceof Lead) ? \$lead->getStage() : null;

        if (\$leadStage) {
            if (\$leadStage->getId() === \$stage->getId()) {
                \$pendingEvent->passWithError(\$log, \$this->translator->trans('mautic.stage.campaign.event.already_in_stage'));

                return;
            }

            if (\$leadStage->getWeight() > \$stage->getWeight()) {
                \$pendingEvent->passWithError(\$log, \$this->translator->trans('mautic.stage.campaign.event.stage_invalid'));

                return;
            }
        }

        \$lead->stageChangeLogEntry(
            \$stage,
            \$stage->getId().': '.\$stage->getName(),
            \$log->getEvent()->getName()
        );
        \$lead->setStage(\$stage);

        \$this->leadModel->saveEntity(\$lead);

        \$pendingEvent->pass(\$log);
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
        return "@bundles/StageBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/CampaignSubscriber.php", "/app/docroot/app/bundles/StageBundle/EventListener/CampaignSubscriber.php");
    }
}
