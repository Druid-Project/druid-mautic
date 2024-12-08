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

/* @MauticFocus/Builder/parent.less.twig */
class __TwigTemplate_4624ece26cf0c628e522f10c6c14e874 extends Template
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
        $context["less"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Bar/parent.less.twig", array(), false);
            // line 3
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Modal/parent.less.twig", array(), false);
            // line 4
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Notification/parent.less.twig", array(), false);
            // line 5
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Page/parent.less.twig", array(), false);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["css"] = $this->extensions['MauticPlugin\MauticFocusBundle\Twig\Extension\FocusBundleExtension']->compileLess((isset($context["less"]) || array_key_exists("less", $context) ? $context["less"] : (function () { throw new RuntimeError('Variable "less" does not exist.', 8, $this->source); })()));
        // line 10
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 10, $this->source); })())) && ("dev" === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "environment", [], "any", false, false, false, 10)))) {
            // line 11
            $context["css"] = $this->extensions['MauticPlugin\MauticFocusBundle\Twig\Extension\FocusBundleExtension']->minifyCss((isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 11, $this->source); })()));
        }
        // line 14
        yield (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 14, $this->source); })());
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/parent.less.twig";
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
        return array (  61 => 14,  58 => 11,  56 => 10,  54 => 8,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/parent.less.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/parent.less.twig");
    }
}
