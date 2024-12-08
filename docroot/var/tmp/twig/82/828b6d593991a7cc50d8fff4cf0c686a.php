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

/* @bundles/SmsBundle/Broadcast/BroadcastExecutioner.php */
class __TwigTemplate_0af61799a7c61c1112f4016b67fbdbb9 extends Template
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

namespace Mautic\\SmsBundle\\Broadcast;

use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\SmsBundle\\Entity\\Sms;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class BroadcastExecutioner
{
    private ?ContactLimiter \$contactLimiter = null;

    private ?BroadcastResult \$result = null;

    public function __construct(
        private SmsModel \$smsModel,
        private BroadcastQuery \$broadcastQuery,
        private TranslatorInterface \$translator,
        private LeadRepository \$leadRepository
    ) {
    }

    public function execute(ChannelBroadcastEvent \$event): void
    {
        // Get list of published broadcasts or broadcast if there is only a single ID
        \$smses = \$this->smsModel->getRepository()->getPublishedBroadcastsIterable(\$event->getId());
        foreach (\$smses as \$sms) {
            \$this->contactLimiter = new ContactLimiter(\$event->getBatch(), null, \$event->getMinContactIdFilter(), \$event->getMaxContactIdFilter(), [], \$event->getThreadId(), \$event->getMaxThreads(), \$event->getLimit());
            \$this->result         = new BroadcastResult();
            try {
                \$this->send(\$sms);
            } catch (\\Exception) {
            }
            \$event->setResults(
                sprintf('%s: %s', \$this->translator->trans('mautic.sms.sms'), \$sms->getName()),
                \$this->result->getSentCount(),
                \$this->result->getFailedCount()
            );
        }
    }

    /**
     * @throws LimitQuotaException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException
     */
    private function send(Sms \$sms): void
    {
        \$contacts = \$this->broadcastQuery->getPendingContacts(\$sms, \$this->contactLimiter);
        while (!empty(\$contacts)) {
            \$reduction = 0;
            \$leads     = [];
            foreach (\$contacts as \$contact) {
                \$contactId  = \$contact['id'];
                \$results    = \$this->smsModel->sendSms(\$sms, \$contactId, [
                    'channel'=> [
                        'sms', \$sms->getId(),
                    ],
                    'listId'=> \$contact['listId'],
                ], \$leads);
                \$this->result->process(\$results);
                \$reduction += count(\$results);
            }

            \$this->contactLimiter->setBatchMinContactId(\$contactId + 1);

            if (\$this->contactLimiter->hasCampaignLimit()) {
                \$this->contactLimiter->reduceCampaignLimitRemaining(\$reduction);
            }

            \$this->leadRepository->detachEntities(\$leads);

            // Next batch
            \$contacts = \$this->broadcastQuery->getPendingContacts(\$sms, \$this->contactLimiter);
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
        return "@bundles/SmsBundle/Broadcast/BroadcastExecutioner.php";
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
        return new Source("", "@bundles/SmsBundle/Broadcast/BroadcastExecutioner.php", "/app/docroot/app/bundles/SmsBundle/Broadcast/BroadcastExecutioner.php");
    }
}
