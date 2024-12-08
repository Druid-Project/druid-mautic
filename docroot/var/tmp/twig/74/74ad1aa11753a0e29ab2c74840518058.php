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

/* @bundles/SmsBundle/EventListener/CampaignSendSubscriber.php */
class __TwigTemplate_0279fd1edb96e345006b1906994ac80c extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\SmsBundle\\Form\\Type\\SmsSendType;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSendSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private SmsModel \$smsModel,
        private TransportChain \$transportChain
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD     => ['onCampaignBuild', 0],
            SmsEvents::ON_CAMPAIGN_TRIGGER_ACTION => ['onCampaignTriggerAction', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event): void
    {
        if (count(\$this->transportChain->getEnabledTransports()) > 0) {
            \$event->addAction(
                'sms.send_text_sms',
                [
                    'label'            => 'mautic.campaign.sms.send_text_sms',
                    'description'      => 'mautic.campaign.sms.send_text_sms.tooltip',
                    'eventName'        => SmsEvents::ON_CAMPAIGN_TRIGGER_ACTION,
                    'formType'         => SmsSendType::class,
                    'formTypeOptions'  => ['update_select' => 'campaignevent_properties_sms'],
                    'formTheme'        => '@MauticSms/FormTheme/SmsSendList/smssend_list_row.html.twig',
                    'channel'          => 'sms',
                    'channelIdField'   => 'sms',
                ]
            );
        }
    }

    public function onCampaignTriggerAction(CampaignExecutionEvent \$event): void
    {
        \$lead  = \$event->getLead();
        \$smsId = (int) \$event->getConfig()['sms'];
        \$sms   = \$this->smsModel->getEntity(\$smsId);

        if (!\$sms) {
            \$event->setFailed('mautic.sms.campaign.failed.missing_entity');

            return;
        }

        if (!\$sms->isPublished()) {
            \$event->setFailed('mautic.sms.campaign.failed.unpublished');

            return;
        }

        \$result = \$this->smsModel->sendSms(\$sms, \$lead, ['channel' => ['campaign.event', \$event->getEvent()['id']]])[\$lead->getId()];

        if ('Authenticate' === \$result['status']) {
            // Don't fail the event but reschedule it for later
            \$event->setResult(false);

            return;
        }

        if (!empty(\$result['sent'])) {
            \$event->setChannel('sms', \$sms->getId());
            \$event->setResult(\$result);
        } else {
            \$result['failed'] = true;
            \$result['reason'] = \$result['status'];
            \$event->setResult(\$result);
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
        return "@bundles/SmsBundle/EventListener/CampaignSendSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/CampaignSendSubscriber.php", "/app/docroot/app/bundles/SmsBundle/EventListener/CampaignSendSubscriber.php");
    }
}
