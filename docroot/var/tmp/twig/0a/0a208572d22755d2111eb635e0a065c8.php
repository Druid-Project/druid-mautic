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

/* @MauticCore/Slots/imagecard.html.twig */
class __TwigTemplate_aeeb486315b7bc62206484879d316fec extends Template
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
        yield "<table class=\"imagecard\" align=\"center\" style=\"background-color: #ddd;\">
    <tr><td class=\"imagecard-image\" align=\"center\"><img width=\"100%\" src=\"";
        // line 2
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/blank-big.png", null, null, true);
        yield "\" alt=\"An image\"/></td></tr>
    <tr><td class=\"imagecard-caption\" style=\"line-height:16px;padding: 5px;background-color: #bbb;font-size:16px;color:#000\" align=\"center\">Your image caption goes here. You can change the position of the caption and style in the customize slot tab.</td></tr>
</table>
<div style=\"clear:both\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Slots/imagecard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Slots/imagecard.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Slots/imagecard.html.twig");
    }
}
