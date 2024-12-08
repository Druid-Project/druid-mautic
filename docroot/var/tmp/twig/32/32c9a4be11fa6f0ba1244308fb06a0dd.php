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

/* @MauticFocus/Builder/Notification/index.html.twig */
class __TwigTemplate_05ca114dad7e1403ddee050b41d43267 extends Template
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Modal/index.html.twig", ["focus" =>         // line 2
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 2, $this->source); })()), "preview" =>         // line 3
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 3, $this->source); })()), "clickUrl" =>         // line 4
(isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 4, $this->source); })()), "htmlMode" =>         // line 5
(isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 5, $this->source); })())]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/Notification/index.html.twig";
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
        return array (  46 => 5,  45 => 4,  44 => 3,  43 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/Notification/index.html.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Notification/index.html.twig");
    }
}
