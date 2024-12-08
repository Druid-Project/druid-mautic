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

/* @bundles/SmsBundle/MauticSmsBundle.php */
class __TwigTemplate_09f1af3169e0099531168f74b891c149 extends Template
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

namespace Mautic\\SmsBundle;

use Mautic\\PluginBundle\\Bundle\\PluginBundleBase;
use Mautic\\SmsBundle\\DependencyInjection\\Compiler\\SmsTransportPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class MauticSmsBundle extends PluginBundleBase
{
    public function build(ContainerBuilder \$container): void
    {
        \$container->addCompilerPass(new SmsTransportPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
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
        return "@bundles/SmsBundle/MauticSmsBundle.php";
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
        return new Source("", "@bundles/SmsBundle/MauticSmsBundle.php", "/app/docroot/app/bundles/SmsBundle/MauticSmsBundle.php");
    }
}
