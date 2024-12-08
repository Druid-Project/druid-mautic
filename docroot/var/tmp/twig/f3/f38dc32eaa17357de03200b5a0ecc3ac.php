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

/* @bundles/SmsBundle/EventListener/SmsSubscriber.php */
class __TwigTemplate_e6cac6bcb62c26fd502ff2c189dd21ed extends Template
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

use Mautic\\AssetBundle\\Helper\\TokenHelper as AssetTokenHelper;
use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Helper\\TokenHelper;
use Mautic\\PageBundle\\Entity\\Trackable;
use Mautic\\PageBundle\\Helper\\TokenHelper as PageTokenHelper;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\SmsBundle\\Event\\SmsEvent;
use Mautic\\SmsBundle\\Helper\\SmsHelper;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SmsSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AuditLogModel \$auditLogModel,
        private TrackableModel \$trackableModel,
        private PageTokenHelper \$pageTokenHelper,
        private AssetTokenHelper \$assetTokenHelper,
        private SmsHelper \$smsHelper,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SmsEvents::SMS_POST_SAVE     => ['onPostSave', 0],
            SmsEvents::SMS_POST_DELETE   => ['onDelete', 0],
            SmsEvents::TOKEN_REPLACEMENT => ['onTokenReplacement', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onPostSave(SmsEvent \$event): void
    {
        \$entity = \$event->getSms();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'   => 'sms',
                'object'   => 'sms',
                'objectId' => \$entity->getId(),
                'action'   => (\$event->isNew()) ? 'create' : 'update',
                'details'  => \$details,
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onDelete(SmsEvent \$event): void
    {
        \$entity = \$event->getSms();
        \$log    = [
            'bundle'   => 'sms',
            'object'   => 'sms',
            'objectId' => \$entity->deletedId,
            'action'   => 'delete',
            'details'  => ['name' => \$entity->getName()],
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    public function onTokenReplacement(TokenReplacementEvent \$event): void
    {
        /** @var Lead \$lead */
        \$lead         = \$event->getLead();
        \$content      = \$event->getContent();
        \$clickthrough = \$event->getClickthrough();

        if (\$content) {
            \$tokens = array_merge(
                TokenHelper::findLeadTokens(\$content, \$lead->getProfileFields()),
                \$this->pageTokenHelper->findPageTokens(\$content, \$clickthrough),
                \$this->assetTokenHelper->findAssetTokens(\$content, \$clickthrough)
            );

            // Disable trackable urls
            if (!\$this->smsHelper->getDisableTrackableUrls()) {
                [\$content, \$trackables] = \$this->trackableModel->parseContentForTrackables(
                    \$content,
                    \$tokens,
                    'sms',
                    \$clickthrough['channel'][1]
                );

                \$shortenEnabled = \$this->coreParametersHelper->get('shortener_sms_enable', false);

                /**
                 * @var string    \$token
                 * @var Trackable \$trackable
                 */
                foreach (\$trackables as \$token => \$trackable) {
                    \$tokens[\$token] = \$this->trackableModel->generateTrackableUrl(\$trackable, \$clickthrough, \$shortenEnabled);
                }
            }

            \$content = str_replace(array_keys(\$tokens), array_values(\$tokens), \$content);
            foreach (\$tokens as \$token => \$value) {
                \$event->addToken(\$token, \$value);
            }

            \$event->setContent(\$content);
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
        return "@bundles/SmsBundle/EventListener/SmsSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/SmsSubscriber.php", "/app/docroot/app/bundles/SmsBundle/EventListener/SmsSubscriber.php");
    }
}
