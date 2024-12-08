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

/* @bundles/PluginBundle/Tests/Helper/PluginBundleBaseStub.php */
class __TwigTemplate_b0986ff2244484658a8c44a9b2c592ee extends Template
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

namespace Mautic\\PluginBundle\\Tests\\Helper;

use Doctrine\\DBAL\\Schema\\Schema;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\PluginBundle\\Entity\\Plugin;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * A stub Base Bundle class which implements stub methods for testing purposes.
 */
abstract class PluginBundleBaseStub extends Bundle
{
    /**
     * @throws \\Exception
     */
    public static function onPluginInstall(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, \$installedSchema = null): void
    {
    }

    /**
     * Called by PluginController::reloadAction when the addon version does not match what's installed.
     *
     * @throws \\Exception
     */
    public static function onPluginUpdate(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, Schema \$installedSchema = null)
    {
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
        return "@bundles/PluginBundle/Tests/Helper/PluginBundleBaseStub.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/Helper/PluginBundleBaseStub.php", "/app/docroot/app/bundles/PluginBundle/Tests/Helper/PluginBundleBaseStub.php");
    }
}
