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

/* @bundles/LeadBundle/EventListener/ContactScheduledExportSubscriber.php */
class __TwigTemplate_a8dc3bd9f6ade08daffd002c62014cda extends Template
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

use Mautic\\LeadBundle\\Event\\ContactExportSchedulerEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\ContactExportSchedulerModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ContactScheduledExportSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private ContactExportSchedulerModel \$contactExportSchedulerModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::CONTACT_EXPORT_PREPARE_FILE    => 'onContactExportPrepareFile',
            LeadEvents::CONTACT_EXPORT_SEND_EMAIL      => 'onContactExportSendEmail',
            LeadEvents::POST_CONTACT_EXPORT_SEND_EMAIL => 'onContactExportEmailSent',
        ];
    }

    public function onContactExportPrepareFile(ContactExportSchedulerEvent \$event): void
    {
        \$contactExportScheduler = \$event->getContactExportScheduler();
        \$filePath               = \$this->contactExportSchedulerModel->processAndGetExportFilePath(\$contactExportScheduler);
        \$event->setFilePath(\$filePath);
    }

    public function onContactExportSendEmail(ContactExportSchedulerEvent \$event): void
    {
        \$contactExportScheduler = \$event->getContactExportScheduler();
        \$this->contactExportSchedulerModel->sendEmail(\$contactExportScheduler, \$event->getFilePath());
    }

    public function onContactExportEmailSent(ContactExportSchedulerEvent \$event): void
    {
        \$contactExportScheduler = \$event->getContactExportScheduler();
        \$this->contactExportSchedulerModel->deleteEntity(\$contactExportScheduler);
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
        return "@bundles/LeadBundle/EventListener/ContactScheduledExportSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ContactScheduledExportSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/ContactScheduledExportSubscriber.php");
    }
}
