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

/* @bundles/PluginBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_ecb85b3a79b086e2fe0f9549800c5d43 extends Template
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

namespace Mautic\\PluginBundle\\EventListener;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\CompanyEvent;
use Mautic\\LeadBundle\\Event\\LeadEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Entity\\IntegrationRepository;
use Mautic\\PluginBundle\\Model\\PluginModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    private const FEATURE_PUSH_LEAD = 'push_lead';

    public function __construct(
        private PluginModel \$pluginModel,
        private IntegrationRepository \$integrationRepository
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::LEAD_PRE_DELETE    => ['onLeadDelete', 0],
            LeadEvents::LEAD_POST_SAVE     => ['onLeadSave', 0],
            LeadEvents::COMPANY_PRE_DELETE => ['onCompanyDelete', 0],
        ];
    }

    /*
     * Delete lead event
     */
    public function onLeadDelete(LeadEvent \$event): bool
    {
        /** @var Lead \$lead */
        \$lead                  = \$event->getLead();
        \$integrationEntityRepo = \$this->pluginModel->getIntegrationEntityRepository();
        \$integrationEntityRepo->findLeadsToDelete('lead%', \$lead->getId());

        return false;
    }

    /*
     * Delete company event
     */
    public function onCompanyDelete(CompanyEvent \$event): bool
    {
        /** @var \\Mautic\\LeadBundle\\Entity\\Company \$company */
        \$company               = \$event->getCompany();
        \$integrationEntityRepo = \$this->pluginModel->getIntegrationEntityRepository();
        \$integrationEntityRepo->findLeadsToDelete('company%', \$company->getId());

        return false;
    }

    /*
    * Change lead event
    */
    public function onLeadSave(LeadEvent \$event): void
    {
        /** @var Lead \$lead */
        \$lead                  = \$event->getLead();
        \$integrationEntityRepo = \$this->pluginModel->getIntegrationEntityRepository();
        if (\$this->isAnyIntegrationEnabled()) {
            \$integrationEntityRepo->updateErrorLeads('lead-error', \$lead->getId());
        }
    }

    private function isAnyIntegrationEnabled(): bool
    {
        \$integrations = \$this->integrationRepository->getIntegrations();
        foreach (\$integrations as \$integration) {
            /** @var Integration \$integration */
            \$supportedFeatures = \$integration->getSupportedFeatures();

            if (\$integration->getIsPublished() && !empty(\$integration->getApiKeys()) && in_array(self::FEATURE_PUSH_LEAD, \$supportedFeatures)) {
                return true;
            }
        }

        return false;
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
        return "@bundles/PluginBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/PluginBundle/EventListener/LeadSubscriber.php", "/app/docroot/app/bundles/PluginBundle/EventListener/LeadSubscriber.php");
    }
}
