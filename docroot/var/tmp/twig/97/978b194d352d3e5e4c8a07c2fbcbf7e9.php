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

/* @bundles/PluginBundle/Config/services.php */
class __TwigTemplate_1bb46c4d0ad6e195f291c660c386cb05 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\MauticCoreExtension;
use Mautic\\PluginBundle\\EventListener\\CampaignSubscriber;
use Mautic\\PluginBundle\\EventListener\\FormSubscriber;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

use function Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\service;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'Helper/oAuthHelper.php',
        'Integration/IntegrationObject.php',
    ];

    \$services->load('Mautic\\\\PluginBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\PluginBundle\\\\Entity\\\\', '../Entity/*Repository.php');

    \$services->alias('mautic.plugin.model.plugin', Mautic\\PluginBundle\\Model\\PluginModel::class);
    \$services->alias('mautic.plugin.model.integration_entity', Mautic\\PluginBundle\\Model\\IntegrationEntityModel::class);

    \$services->set(FormSubscriber::class)
        ->call('setIntegrationHelper', [service('mautic.helper.integration')]);
    \$services->set(CampaignSubscriber::class)
        ->call('setIntegrationHelper', [service('mautic.helper.integration')]);
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PluginBundle/Config/services.php";
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
        return new Source("", "@bundles/PluginBundle/Config/services.php", "/app/docroot/app/bundles/PluginBundle/Config/services.php");
    }
}
