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

/* @bundles/LeadBundle/EventListener/ImportSubscriber.php */
class __TwigTemplate_84aaa9dceb31e8dfd8b4e6672a5e40b8 extends Template
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

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Event\\ImportEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ImportSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::IMPORT_POST_SAVE   => ['onImportPostSave', 0],
            LeadEvents::IMPORT_POST_DELETE => ['onImportDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onImportPostSave(ImportEvent \$event): void
    {
        \$entity = \$event->getEntity();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'lead',
                'object'    => 'import',
                'objectId'  => \$entity->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onImportDelete(ImportEvent \$event): void
    {
        \$entity = \$event->getEntity();
        \$log    = [
            'bundle'    => 'lead',
            'object'    => 'import',
            'objectId'  => \$entity->deletedId,
            'action'    => 'delete',
            'details'   => ['originalFile' => \$entity->getOriginalFile()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);

        // In case of batch delete, this method call remove the uploaded file
        \$entity->removeFile();
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
        return "@bundles/LeadBundle/EventListener/ImportSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ImportSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/ImportSubscriber.php");
    }
}
