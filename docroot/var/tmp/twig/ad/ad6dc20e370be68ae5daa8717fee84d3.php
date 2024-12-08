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

/* @bundles/InstallBundle/DependencyInjection/MauticInstallExtension.php */
class __TwigTemplate_cb4555a0e0f1d3217f60a5f4c7ba029c extends Template
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

namespace Mautic\\InstallBundle\\DependencyInjection;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

class MauticInstallExtension extends Extension
{
    /**
     * @param mixed[] \$configs
     */
    public function load(array \$configs, ContainerBuilder \$container): void
    {
        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/../Config'));
        \$loader->load('services.php');
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
        return "@bundles/InstallBundle/DependencyInjection/MauticInstallExtension.php";
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
        return new Source("", "@bundles/InstallBundle/DependencyInjection/MauticInstallExtension.php", "/app/docroot/app/bundles/InstallBundle/DependencyInjection/MauticInstallExtension.php");
    }
}
