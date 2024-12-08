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

/* @bundles/AssetBundle/EventListener/AssetSubscriber.php */
class __TwigTemplate_74c9e8d5f876f90a136dedb7c976c1a7 extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\AssetEvents;
use Mautic\\AssetBundle\\Event as Events;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class AssetSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            AssetEvents::ASSET_POST_SAVE   => ['onAssetPostSave', 0],
            AssetEvents::ASSET_POST_DELETE => ['onAssetDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onAssetPostSave(Events\\AssetEvent \$event): void
    {
        \$asset = \$event->getAsset();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'asset',
                'object'    => 'asset',
                'objectId'  => \$asset->getId(),
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
    public function onAssetDelete(Events\\AssetEvent \$event): void
    {
        \$asset = \$event->getAsset();
        \$log   = [
            'bundle'    => 'asset',
            'object'    => 'asset',
            'objectId'  => \$asset->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$asset->getTitle()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);

        // In case of batch delete, this method call remove the uploaded file
        \$asset->removeUpload();
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
        return "@bundles/AssetBundle/EventListener/AssetSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/AssetSubscriber.php", "/app/docroot/app/bundles/AssetBundle/EventListener/AssetSubscriber.php");
    }
}
