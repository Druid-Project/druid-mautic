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

/* @bundles/IntegrationsBundle/EventListener/UIContactIntegrationsTabSubscriber.php */
class __TwigTemplate_9d435edb03c0241ee99ef8c998646c97 extends Template
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

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomTemplateEvent;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class UIContactIntegrationsTabSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private ObjectMappingRepository \$objectMappingRepository
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::VIEW_INJECT_CUSTOM_TEMPLATE => ['onTemplateRender', 0],
        ];
    }

    public function onTemplateRender(CustomTemplateEvent \$event): void
    {
        if ('@MauticLead/Lead/lead.html.twig' === \$event->getTemplate()) {
            \$vars         = \$event->getVars();
            \$integrations = \$vars['integrations'];

            /** @var Lead \$contact */
            \$contact = \$vars['lead'];

            \$objectMappings = \$this->objectMappingRepository->getIntegrationMappingsForInternalObject(
                Contact::NAME,
                (int) \$contact->getId()
            );

            foreach (\$objectMappings as \$objectMapping) {
                \$integrations[] = [
                    'integration'           => \$objectMapping->getIntegration(),
                    'integration_entity'    => \$objectMapping->getIntegrationObjectName(),
                    'integration_entity_id' => \$objectMapping->getIntegrationObjectId(),
                    'date_added'            => \$objectMapping->getDateCreated(),
                    'last_sync_date'        => \$objectMapping->getLastSyncDate(),
                ];
            }

            \$vars['integrations'] = \$integrations;

            \$event->setVars(\$vars);
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
        return "@bundles/IntegrationsBundle/EventListener/UIContactIntegrationsTabSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/UIContactIntegrationsTabSubscriber.php", "/app/docroot/app/bundles/IntegrationsBundle/EventListener/UIContactIntegrationsTabSubscriber.php");
    }
}
