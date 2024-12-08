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

/* @bundles/IntegrationsBundle/EventListener/ContactObjectSubscriber.php */
class __TwigTemplate_4a0e32a214557047eebc76f38ab1ea5c extends Template
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
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper\\ContactObjectHelper;
use Mautic\\LeadBundle\\Exception\\ImportFailedException;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;

class ContactObjectSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private ContactObjectHelper \$contactObjectHelper,
        private RouterInterface \$router
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS    => ['collectInternalObjects', 0],
            IntegrationEvents::INTEGRATION_UPDATE_INTERNAL_OBJECTS     => ['updateContacts', 0],
            IntegrationEvents::INTEGRATION_CREATE_INTERNAL_OBJECTS     => ['createContacts', 0],
            IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORDS       => [
                ['findContactsByIds', 0],
                ['findContactsByDateRange', 0],
                ['findContactsByFieldValues', 0],
            ],
            IntegrationEvents::INTEGRATION_FIND_OWNER_IDS              => ['findOwnerIdsForContacts', 0],
            IntegrationEvents::INTEGRATION_BUILD_INTERNAL_OBJECT_ROUTE => ['buildContactRoute', 0],
            IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORD        => ['findContactById', 0],
        ];
    }

    public function collectInternalObjects(InternalObjectEvent \$event): void
    {
        \$event->addObject(new Contact());
    }

    public function updateContacts(InternalObjectUpdateEvent \$event): void
    {
        if (Contact::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setUpdatedObjectMappings(
            \$this->contactObjectHelper->update(
                \$event->getIdentifiedObjectIds(),
                \$event->getUpdateObjects()
            )
        );
        \$event->stopPropagation();
    }

    public function createContacts(InternalObjectCreateEvent \$event): void
    {
        if (Contact::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setObjectMappings(\$this->contactObjectHelper->create(\$event->getCreateObjects()));
        \$event->stopPropagation();
    }

    public function findContactsByIds(InternalObjectFindEvent \$event): void
    {
        if (Contact::NAME !== \$event->getObject()->getName() || empty(\$event->getIds())) {
            return;
        }

        \$event->setFoundObjects(\$this->contactObjectHelper->findObjectsByIds(\$event->getIds()));
        \$event->stopPropagation();
    }

    public function findContactsByDateRange(InternalObjectFindEvent \$event): void
    {
        if (Contact::NAME !== \$event->getObject()->getName() || empty(\$event->getDateRange())) {
            return;
        }

        \$event->setFoundObjects(
            \$this->contactObjectHelper->findObjectsBetweenDates(
                \$event->getDateRange()->getFromDate(),
                \$event->getDateRange()->getToDate(),
                \$event->getStart(),
                \$event->getLimit()
            )
        );
        \$event->stopPropagation();
    }

    public function findContactsByFieldValues(InternalObjectFindEvent \$event): void
    {
        if (Contact::NAME !== \$event->getObject()->getName() || empty(\$event->getFieldValues())) {
            return;
        }

        \$event->setFoundObjects(
            \$this->contactObjectHelper->findObjectsByFieldValues(
                \$event->getFieldValues()
            )
        );
        \$event->stopPropagation();
    }

    public function findOwnerIdsForContacts(InternalObjectOwnerEvent \$event): void
    {
        if (Contact::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setOwners(
            \$this->contactObjectHelper->findOwnerIds(
                \$event->getObjectIds()
            )
        );
        \$event->stopPropagation();
    }

    public function buildContactRoute(InternalObjectRouteEvent \$event): void
    {
        if (Contact::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$event->setRoute(
            \$this->router->generate(
                'mautic_contact_action',
                [
                    'objectAction' => 'view',
                    'objectId'     => \$event->getId(),
                ]
            )
        );
        \$event->stopPropagation();
    }

    /**
     * @throws ImportFailedException
     */
    public function findContactById(InternalObjectFindByIdEvent \$event): void
    {
        if (null === \$event->getId() || Contact::NAME !== \$event->getObject()->getName()) {
            return;
        }

        \$contact = \$this->contactObjectHelper->findObjectById(\$event->getId());

        if (null === \$contact) {
            return;
        }

        \$this->contactObjectHelper->setFieldValues(\$contact);
        \$event->setEntity(\$contact);
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
        return "@bundles/IntegrationsBundle/EventListener/ContactObjectSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/ContactObjectSubscriber.php", "/app/docroot/app/bundles/IntegrationsBundle/EventListener/ContactObjectSubscriber.php");
    }
}
