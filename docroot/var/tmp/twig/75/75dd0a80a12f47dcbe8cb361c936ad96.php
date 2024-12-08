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

/* @bundles/InstallBundle/MauticInstallBundle.php */
class __TwigTemplate_ccd8b432a3a64483107760acc265d537 extends Template
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

namespace Mautic\\InstallBundle;

use Mautic\\InstallBundle\\DependencyInjection\\Compiler\\InstallCommandPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class MauticInstallBundle extends Bundle
{
    public function build(ContainerBuilder \$container): void
    {
        parent::build(\$container);

        \$container->addCompilerPass(new InstallCommandPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
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
        return "@bundles/InstallBundle/MauticInstallBundle.php";
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
        return new Source("", "@bundles/InstallBundle/MauticInstallBundle.php", "/app/docroot/app/bundles/InstallBundle/MauticInstallBundle.php");
    }
}
