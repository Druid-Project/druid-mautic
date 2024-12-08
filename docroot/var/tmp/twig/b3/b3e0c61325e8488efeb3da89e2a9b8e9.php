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

/* @MauticCore/Helper/toolbar_page_actions.html.twig */
class __TwigTemplate_a27abaddd6f68fae499e0228af15e5ba extends Template
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
        $context["item"] = ((array_key_exists("item", $context)) ? ((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })())) : (null));
        // line 2
        $context["tooltip"] = ((array_key_exists("tooltip", $context)) ? ((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 2, $this->source); })())) : (null));
        // line 3
        yield "
";
        // line 4
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_PAGE_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_BUTTON_DROPDOWN"),         // line 7
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()));
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "

";
        // line 11
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 11, $this->source); })()))) {
            // line 12
            yield "    ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButtonsFromTemplate((isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 12, $this->source); })()), (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 12, $this->source); })()), (isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 12, $this->source); })()), (isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 12, $this->source); })()), (isset($context["langVar"]) || array_key_exists("langVar", $context) ? $context["langVar"] : (function () { throw new RuntimeError('Variable "langVar" does not exist.', 12, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 12, $this->source); })()), (isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 12, $this->source); })()), (isset($context["routeVars"]) || array_key_exists("routeVars", $context) ? $context["routeVars"] : (function () { throw new RuntimeError('Variable "routeVars" does not exist.', 12, $this->source); })()), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 12, $this->source); })()));
            yield "
";
        }
        // line 14
        yield "
";
        // line 15
        $context["buttons"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render(), "</a>"), 0,  -1);
        // line 16
        $context["standardButtons"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::filter($this->env, (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 16, $this->source); })()), function ($__button__) use ($context, $macros) { $context["button"] = $__button__; return CoreExtension::inFilter("btn", (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 16, $this->source); })())); }), function ($__button__) use ($context, $macros) { $context["button"] = $__button__; return ((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 16, $this->source); })()) . "</a>"); }));
        // line 17
        $context["dropdownItems"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::filter($this->env, (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 17, $this->source); })()), function ($__button__) use ($context, $macros) { $context["button"] = $__button__; return !CoreExtension::inFilter("btn", (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 17, $this->source); })())); }), function ($__button__) use ($context, $macros) { $context["button"] = $__button__; return ((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 17, $this->source); })()) . "</a>"); }));
        // line 18
        yield "
<div class=\"dropdown\">
    ";
        // line 20
        if ((isset($context["dropdownItems"]) || array_key_exists("dropdownItems", $context) ? $context["dropdownItems"] : (function () { throw new RuntimeError('Variable "dropdownItems" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "    ";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/toolbar_page_actions.html.twig", 21)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["variant" => "ghost", "label" => "mautic.core.options", "icon_only" => true, "icon" => "ri-settings-5-line ri-1x", "attributes" => ["class" => "dropdown-toggle", "data-toggle" => "dropdown", "aria-expanded" => "false", "type" => "button", "id" => "page-list-actions"]]]]));
            // line 38
            yield "
        <ul class=\"dropdown-menu\" role=\"menu\">";
            // line 39
            yield (isset($context["dropdownItems"]) || array_key_exists("dropdownItems", $context) ? $context["dropdownItems"] : (function () { throw new RuntimeError('Variable "dropdownItems" does not exist.', 39, $this->source); })());
            yield "</ul>
    ";
        }
        // line 41
        yield "</div>
";
        // line 42
        yield (isset($context["standardButtons"]) || array_key_exists("standardButtons", $context) ? $context["standardButtons"] : (function () { throw new RuntimeError('Variable "standardButtons" does not exist.', 42, $this->source); })());
        yield "
";
        // line 43
        yield (isset($context["extraHtml"]) || array_key_exists("extraHtml", $context) ? $context["extraHtml"] : (function () { throw new RuntimeError('Variable "extraHtml" does not exist.', 43, $this->source); })());
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/toolbar_page_actions.html.twig";
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
        return array (  100 => 43,  96 => 42,  93 => 41,  88 => 39,  85 => 38,  82 => 21,  80 => 20,  76 => 18,  74 => 17,  72 => 16,  70 => 15,  67 => 14,  61 => 12,  59 => 11,  54 => 9,  52 => 8,  50 => 7,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/toolbar_page_actions.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/toolbar_page_actions.html.twig");
    }
}
