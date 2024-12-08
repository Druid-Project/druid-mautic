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

/* @bundles/CategoryBundle/EventListener/CategorySubscriber.php */
class __TwigTemplate_91e34d2c8b94a028c5ac420706e39370 extends Template
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

namespace Mautic\\CategoryBundle\\EventListener;

use Mautic\\CategoryBundle\\CategoryEvents;
use Mautic\\CategoryBundle\\Event as Events;
use Mautic\\CategoryBundle\\Event\\CategoryTypesEvent;
use Mautic\\CoreBundle\\Helper\\BundleHelper;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CategorySubscriber implements EventSubscriberInterface
{
    public function __construct(
        private BundleHelper \$bundleHelper,
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CategoryEvents::CATEGORY_ON_BUNDLE_LIST_BUILD => ['onCategoryBundleListBuild', 0],
            CategoryEvents::CATEGORY_POST_SAVE            => ['onCategoryPostSave', 0],
            CategoryEvents::CATEGORY_POST_DELETE          => ['onCategoryDelete', 0],
        ];
    }

    /**
     * Add bundle to the category.
     */
    public function onCategoryBundleListBuild(CategoryTypesEvent \$event): void
    {
        \$bundles = \$this->bundleHelper->getMauticBundles(true);

        foreach (\$bundles as \$bundle) {
            if (!empty(\$bundle['config']['categories'])) {
                foreach (\$bundle['config']['categories'] as \$type => \$label) {
                    \$event->addCategoryType(\$type, \$label);
                }
            }
        }
    }

    /**
     * Add an entry to the audit log.
     */
    public function onCategoryPostSave(Events\\CategoryEvent \$event): void
    {
        \$category = \$event->getCategory();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'category',
                'object'    => 'category',
                'objectId'  => \$category->getId(),
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
    public function onCategoryDelete(Events\\CategoryEvent \$event): void
    {
        \$category = \$event->getCategory();
        \$log      = [
            'bundle'    => 'category',
            'object'    => 'category',
            'objectId'  => \$category->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$category->getTitle()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
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
        return "@bundles/CategoryBundle/EventListener/CategorySubscriber.php";
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
        return new Source("", "@bundles/CategoryBundle/EventListener/CategorySubscriber.php", "/app/docroot/app/bundles/CategoryBundle/EventListener/CategorySubscriber.php");
    }
}
