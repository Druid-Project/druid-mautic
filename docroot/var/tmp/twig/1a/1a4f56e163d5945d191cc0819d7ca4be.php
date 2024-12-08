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

/* @bundles/LeadBundle/EventListener/ContactExportSchedulerLoggerSubscriber.php */
class __TwigTemplate_98a7090374169ddb022cbffff3b872ac extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Entity\\ContactExportScheduler;
use Mautic\\LeadBundle\\Event\\ContactExportSchedulerEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ContactExportSchedulerLoggerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LoggerInterface \$logger
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::POST_CONTACT_EXPORT_SCHEDULED  => 'onContactExportScheduled',
            LeadEvents::POST_CONTACT_EXPORT_SEND_EMAIL => 'onContactExportEmailSent',
        ];
    }

    public function onContactExportScheduled(ContactExportSchedulerEvent \$event): void
    {
        \$utcScheduledDateTimeStr = \$this->getContactExportScheduledDateTimeStr(\$event->getContactExportScheduler());

        \$this->logger->debug(
            'Contact export #ID '.\$event->getContactExportScheduler()->getId()
            .' scheduled at '.\$utcScheduledDateTimeStr.' UTC'
        );
    }

    public function onContactExportEmailSent(ContactExportSchedulerEvent \$event): void
    {
        \$utcScheduledDateTimeStr = \$this->getContactExportScheduledDateTimeStr(\$event->getContactExportScheduler());

        \$this->logger->debug(
            'Contact export #ID '.\$event->getContactExportScheduler()->getId()
            .' scheduled at '.\$utcScheduledDateTimeStr.' UTC has been processed at '
            .(new \\DateTime())->setTimezone(new \\DateTimeZone('UTC'))->format(DateTimeHelper::FORMAT_DB)
            .' UTC'
        );
    }

    private function getContactExportScheduledDateTimeStr(ContactExportScheduler \$contactExportScheduler): string
    {
        /** @var \\DateTimeImmutable \$scheduledDateTime */
        \$scheduledDateTime = \$contactExportScheduler->getScheduledDateTime();

        return \$scheduledDateTime->setTimezone(new \\DateTimeZone('UTC'))->format(DateTimeHelper::FORMAT_DB);
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
        return "@bundles/LeadBundle/EventListener/ContactExportSchedulerLoggerSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ContactExportSchedulerLoggerSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/ContactExportSchedulerLoggerSubscriber.php");
    }
}
