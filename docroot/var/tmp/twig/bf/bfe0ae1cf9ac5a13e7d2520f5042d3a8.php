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

/* @bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php */
class __TwigTemplate_7e87a92c33ef6043137e00362a3ddc01 extends Template
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

namespace Mautic\\AssetBundle\\Event;

use Gaufrette\\Adapter;
use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

class RemoteAssetBrowseEvent extends CommonEvent
{
    private ?Adapter \$adapter = null;

    public function __construct(
        private UnifiedIntegrationInterface \$integration
    ) {
    }

    public function getAdapter(): ?Adapter
    {
        return \$this->adapter;
    }

    public function getIntegration(): UnifiedIntegrationInterface
    {
        return \$this->integration;
    }

    public function setAdapter(Adapter \$adapter): void
    {
        \$this->adapter = \$adapter;
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
        return "@bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php";
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
        return new Source("", "@bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php", "/app/docroot/app/bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php");
    }
}
