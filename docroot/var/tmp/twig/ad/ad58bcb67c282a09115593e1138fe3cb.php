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

/* @bundles/AssetBundle/Event/AssetLoadEvent.php */
class __TwigTemplate_28e04a3af5a0fb5765bd12e7f5cefd1b extends Template
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

use Mautic\\AssetBundle\\Entity\\Download;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class AssetLoadEvent extends CommonEvent
{
    public function __construct(
        Download \$download,
        protected bool \$unique
    ) {
        \$this->entity = \$download;
    }

    /**
     * Returns the Download entity.
     *
     * @return Download
     */
    public function getRecord()
    {
        return \$this->entity;
    }

    /**
     * @return \\Mautic\\AssetBundle\\Entity\\Asset
     */
    public function getAsset()
    {
        return \$this->entity->getAsset();
    }

    /**
     * Returns if this is the first download for the session.
     */
    public function isUnique(): bool
    {
        return \$this->unique;
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
        return "@bundles/AssetBundle/Event/AssetLoadEvent.php";
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
        return new Source("", "@bundles/AssetBundle/Event/AssetLoadEvent.php", "/app/docroot/app/bundles/AssetBundle/Event/AssetLoadEvent.php");
    }
}
