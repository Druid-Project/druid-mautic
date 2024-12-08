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

/* @bundles/ConfigBundle/Config/services.php */
class __TwigTemplate_a8aea75b15c1a223bf11c13914e5d370 extends Template
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

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'Form/DataTransformer/DsnTransformer.php',
    ];

    \$services->load('Mautic\\\\ConfigBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->get(Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer::class)->arg('\$allowedParameters', '%mautic.config_allowed_parameters%');
    \$services->get(Mautic\\ConfigBundle\\Form\\Helper\\RestrictionHelper::class)->arg('\$restrictedFields', '%mautic.security.restrictedConfigFields%');
    \$services->get(Mautic\\ConfigBundle\\Form\\Helper\\RestrictionHelper::class)->arg('\$displayMode', '%mautic.security.restrictedConfigFields.displayMode%');

    // @deprecated Remove all aliases in Mautic 6. Use FQCN instead.
    \$services->alias('mautic.config.model.sysinfo', Mautic\\ConfigBundle\\Model\\SysinfoModel::class);
    \$services->alias('mautic.config.mapper', Mautic\\ConfigBundle\\Mapper\\ConfigMapper::class);
    \$services->alias('mautic.config.config_change_logger', Mautic\\ConfigBundle\\Service\\ConfigChangeLogger::class);
    \$services->alias('mautic.config.form.escape_transformer', Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer::class);
    \$services->alias('mautic.config.form.restriction_helper', Mautic\\ConfigBundle\\Form\\Helper\\RestrictionHelper::class);
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ConfigBundle/Config/services.php";
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
        return new Source("", "@bundles/ConfigBundle/Config/services.php", "/app/docroot/app/bundles/ConfigBundle/Config/services.php");
    }
}
