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

/* @bundles/ApiBundle/Config/services.php */
class __TwigTemplate_1672ca0384374b2d6b6a97d79a491904 extends Template
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
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

use function Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\service;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'Serializer/Exclusion',
        'Helper/BatchIdToEntityHelper.php',
    ];

    \$services->load('Mautic\\\\ApiBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\ApiBundle\\\\Entity\\\\oAuth2\\\\', '../Entity/oAuth2/*Repository.php');

    \$services->get(Mautic\\ApiBundle\\Controller\\oAuth2\\AuthorizeController::class)
        ->arg('\$authorizeForm', service('fos_oauth_server.authorize.form'))
        ->arg('\$authorizeFormHandler', service('fos_oauth_server.authorize.form.handler.default'))
        ->arg('\$oAuth2Server', service('fos_oauth_server.server'))
        ->arg('\$clientManager', service('fos_oauth_server.client_manager.default'));

    \$services->alias('mautic.api.model.client', Mautic\\ApiBundle\\Model\\ClientModel::class);
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ApiBundle/Config/services.php";
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
        return new Source("", "@bundles/ApiBundle/Config/services.php", "/app/docroot/app/bundles/ApiBundle/Config/services.php");
    }
}
