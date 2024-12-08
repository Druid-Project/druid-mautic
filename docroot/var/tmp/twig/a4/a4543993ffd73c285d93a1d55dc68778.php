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

/* @bundles/AssetBundle/Event/AssetEvent.php */
class __TwigTemplate_1697836d4572c3220400e48edb1bd48f extends Template
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

use Mautic\\AssetBundle\\Entity\\Asset;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class AssetEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Asset \$asset, \$isNew = false)
    {
        \$this->entity = \$asset;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Asset entity.
     *
     * @return Asset
     */
    public function getAsset()
    {
        return \$this->entity;
    }

    /**
     * Sets the Asset entity.
     */
    public function setAsset(Asset \$asset): void
    {
        \$this->entity = \$asset;
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
        return "@bundles/AssetBundle/Event/AssetEvent.php";
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
        return new Source("", "@bundles/AssetBundle/Event/AssetEvent.php", "/app/docroot/app/bundles/AssetBundle/Event/AssetEvent.php");
    }
}
