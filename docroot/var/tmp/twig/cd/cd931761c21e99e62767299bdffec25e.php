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

/* @bundles/CategoryBundle/Config/services.php */
class __TwigTemplate_137572410c73f4b5b29584a51ff61cf6 extends Template
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
    ];

    \$services->load('Mautic\\\\CategoryBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\CategoryBundle\\\\Entity\\\\', '../Entity/*Repository.php');
    \$services->alias('mautic.category.model.category', Mautic\\CategoryBundle\\Model\\CategoryModel::class);
    \$services->alias('mautic.category.model.contact.action', Mautic\\CategoryBundle\\Model\\ContactActionModel::class);
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CategoryBundle/Config/services.php";
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
        return new Source("", "@bundles/CategoryBundle/Config/services.php", "/app/docroot/app/bundles/CategoryBundle/Config/services.php");
    }
}
