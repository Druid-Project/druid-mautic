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

/* @bundles/IntegrationsBundle/EventListener/CompanyObjectSubscriber.php */
class __TwigTemplate_2fa3c6f2dd2f9865e2e9b7fc7934603a extends Template
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

namespace Mautic\\IntegrationsBundle\\EventListener;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectCreateEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectFindByIdEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectFindEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectOwnerEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectRouteEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectUpdateEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Company;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper\\CompanyObjectHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;

class CompanyObjectSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private CompanyObjectHelper \$companyObjectHelper,
        private RouterInterface \$router
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS    => ['collectInternalObjects', 0],
            IntegrationEvents::INTEGRATION_UPDATE_INTERNAL_OBJECTS     => ['updateCompanies', 0],
            IntegrationEvents::INTEGRATION_CREATE_INTERNAL_OBJECTS     => ['createCompanies', 0],
            IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORDS       => [
                ['findCompaniesByIds', 0],
                ['findCompaniesByDateRange', 0],
                ['findCompaniesByFieldValues', 0],
            ],
            IntegrationEvents::INTEGRATION_FIND_OWNER_IDS              => ['findOwnerIdsForCompanies', 0],
            IntegrationEvents::INTEGRATION_BUILD_INTERNAL_OBJECT_ROUTE => ['buildCompanyRoute', 0],
            IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORD        => ['findCompanyById', 0],
        ];
    }

    public function collectInternalObjects(InternalObjectEvent \$event): void
    {
        \$event->addObject(new Company());
    }

    public function updateCompanies(InternalObjectUpdateEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setUpdatedObjectMappings(
            \$this->companyObjectHelper->update(
                \$event->getIdentifiedObjectIds(),
                \$event->getUpdateObjects()
            )
        );
        \$event->stopPropagation();
    }

    public function createCompanies(InternalObjectCreateEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setObjectMappings(\$this->companyObjectHelper->create(\$event->getCreateObjects()));
        \$event->stopPropagation();
    }

    public function findCompaniesByIds(InternalObjectFindEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName() || empty(\$event->getIds())) {
            return;
        }

        \$event->setFoundObjects(\$this->companyObjectHelper->findObjectsByIds(\$event->getIds()));
        \$event->stopPropagation();
    }

    public function findCompaniesByDateRange(InternalObjectFindEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName() || empty(\$event->getDateRange())) {
            return;
        }

        \$event->setFoundObjects(
            \$this->companyObjectHelper->findObjectsBetweenDates(
                \$event->getDateRange()->getFromDate(),
                \$event->getDateRange()->getToDate(),
                \$event->getStart(),
                \$event->getLimit()
            )
        );
        \$event->stopPropagation();
    }

    public function findCompaniesByFieldValues(InternalObjectFindEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName() || empty(\$event->getFieldValues())) {
            return;
        }

        \$event->setFoundObjects(
            \$this->companyObjectHelper->findObjectsByFieldValues(
                \$event->getFieldValues()
            )
        );
        \$event->stopPropagation();
    }

    public function findOwnerIdsForCompanies(InternalObjectOwnerEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setOwners(
            \$this->companyObjectHelper->findOwnerIds(
                \$event->getObjectIds()
            )
        );
        \$event->stopPropagation();
    }

    public function buildCompanyRoute(InternalObjectRouteEvent \$event): void
    {
        if (Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setRoute(
            \$this->router->generate(
                'mautic_company_action',
                [
                    'objectAction' => 'view',
                    'objectId'     => \$event->getId(),
                ]
            )
        );
        \$event->stopPropagation();
    }

    public function findCompanyById(InternalObjectFindByIdEvent \$event): void
    {
        if (null === \$event->getId() || Company::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$company = \$this->companyObjectHelper->findObjectById(\$event->getId());

        if (null === \$company) {
            return;
        }

        \$this->companyObjectHelper->setFieldValues(\$company);
        \$event->setEntity(\$company);
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
        return "@bundles/IntegrationsBundle/EventListener/CompanyObjectSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/CompanyObjectSubscriber.php", "/app/docroot/app/bundles/IntegrationsBundle/EventListener/CompanyObjectSubscriber.php");
    }
}
