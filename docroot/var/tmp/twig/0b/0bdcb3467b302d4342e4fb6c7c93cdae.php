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

/* @bundles/UserBundle/MauticUserBundle.php */
class __TwigTemplate_7b02555e96951059e8409fbf77b959cf extends Template
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

namespace Mautic\\UserBundle;

use Mautic\\UserBundle\\DependencyInjection\\Firewall\\Factory\\PluginFactory;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class MauticUserBundle extends Bundle
{
    public function build(ContainerBuilder \$container): void
    {
        parent::build(\$container);

        \$extension = \$container->getExtension('security');
        \$extension->addSecurityListenerFactory(new PluginFactory());
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
        return "@bundles/UserBundle/MauticUserBundle.php";
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
        return new Source("", "@bundles/UserBundle/MauticUserBundle.php", "/app/docroot/app/bundles/UserBundle/MauticUserBundle.php");
    }
}
