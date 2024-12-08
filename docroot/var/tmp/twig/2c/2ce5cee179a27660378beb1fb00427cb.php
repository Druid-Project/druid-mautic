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

/* @bundles/LeadBundle/EventListener/CampaignActionDeleteContactSubscriber.php */
class __TwigTemplate_e5d6fe1f95c7c21f012ac313e3df77e7 extends Template
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

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\PendingEvent;
use Mautic\\CampaignBundle\\Helper\\RemovedContactTracker;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignActionDeleteContactSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LeadModel \$leadModel,
        private RemovedContactTracker \$removedContactTracker
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD             => ['configureAction', 0],
            LeadEvents::ON_CAMPAIGN_ACTION_DELETE_CONTACT => ['deleteContacts', 0],
        ];
    }

    public function configureAction(CampaignBuilderEvent \$event): void
    {
        \$event->addAction(
            'lead.deletecontact',
            [
                'label'                  => 'mautic.lead.lead.events.delete',
                'description'            => 'mautic.lead.lead.events.delete_descr',
                // Kept for BC in case plugins are listening to the shared trigger
                'eventName'              => LeadEvents::ON_CAMPAIGN_TRIGGER_ACTION,
                'batchEventName'         => LeadEvents::ON_CAMPAIGN_ACTION_DELETE_CONTACT,
                'connectionRestrictions' => [
                    'target' => [
                        'decision'  => ['none'],
                        'action'    => ['none'],
                        'condition' => ['none'],
                    ],
                ],
            ]
        );
    }

    public function deleteContacts(PendingEvent \$event): void
    {
        \$contactIds = \$event->getContactIds();

        \$this->removedContactTracker->addRemovedContacts(
            \$event->getEvent()->getCampaign()->getId(),
            \$contactIds
        );

        \$this->leadModel->deleteEntities(\$contactIds);

        \$event->passAll();
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
        return "@bundles/LeadBundle/EventListener/CampaignActionDeleteContactSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/CampaignActionDeleteContactSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/CampaignActionDeleteContactSubscriber.php");
    }
}
