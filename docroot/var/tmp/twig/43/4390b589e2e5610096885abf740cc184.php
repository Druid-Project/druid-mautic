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

/* @MauticAsset/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_ade84b4a749ae5d6d25d8364c20c7171 extends Template
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
        yield "<div>
Hello";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticAsset/Asset/preview.html.twig", ["activeAsset" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "extra", [], "any", false, false, false, 3), "asset", [], "any", false, false, false, 3), "assetDownloadUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "asset", [], "any", false, false, false, 5), "getId", [], "method", false, false, false, 5)])]);
        // line 7
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticAsset/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  48 => 7,  46 => 5,  45 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/SubscribedEvents/Timeline/index.html.twig", "/app/docroot/app/bundles/AssetBundle/Resources/views/SubscribedEvents/Timeline/index.html.twig");
    }
}
