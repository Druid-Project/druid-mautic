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

/* @MauticCore/Helper/search.html.twig */
class __TwigTemplate_ad4a929f41f6af422a153def1c623f7f extends Template
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
        $context["searchValue"] = ((array_key_exists("searchValue", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        $context["target"] = ((array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 2, $this->source); })()), ".page-list")) : (".page-list"));
        // line 3
        $context["overlayTarget"] = ((array_key_exists("overlayTarget", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["overlayTarget"]) || array_key_exists("overlayTarget", $context) ? $context["overlayTarget"] : (function () { throw new RuntimeError('Variable "overlayTarget" does not exist.', 3, $this->source); })()), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 3, $this->source); })()))) : ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 3, $this->source); })())));
        // line 4
        $context["overlayEnabled"] = (((array_key_exists("overlayDisabled", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["overlayDisabled"]) || array_key_exists("overlayDisabled", $context) ? $context["overlayDisabled"] : (function () { throw new RuntimeError('Variable "overlayDisabled" does not exist.', 4, $this->source); })())))) ? ("false") : ("true"));
        // line 5
        $context["id"] = ((array_key_exists("searchId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 5, $this->source); })()), "list-search")) : ("list-search"));
        // line 6
        $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 6, $this->source); })()), "list")) : ("list"));
        // line 7
        yield "
";
        // line 8
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/search.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.search.clear", "variant" => "ghost", "icon" => "ri-search-line ri-fw", "icon_only" => true, "size" => "sm", "attributes" => ["type" => "button", "id" => "btn-filter", "data-livesearch-parent" =>         // line 19
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "class" => "input-group-btn btn-search"]]]]));
        // line 25
        yield "<div class=\"input-group d-flex fg-1\">
    <input type=\"search\" class=\"form-control search\" id=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" name=\"search\" placeholder=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.placeholder", [], "messages");
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 26, $this->source); })()));
        yield "\" autocomplete=\"false\" data-toggle=\"livesearch\" data-target=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" data-tmpl=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" data-action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" data-overlay=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overlayEnabled"]) || array_key_exists("overlayEnabled", $context) ? $context["overlayEnabled"] : (function () { throw new RuntimeError('Variable "overlayEnabled" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" data-overlay-text=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.livesearch", [], "messages");
        yield "\" data-overlay-target=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overlayTarget"]) || array_key_exists("overlayTarget", $context) ? $context["overlayTarget"] : (function () { throw new RuntimeError('Variable "overlayTarget" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" />
</div>
";
        // line 28
        if (((array_key_exists("filters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 28, $this->source); })()))) || (array_key_exists("quickFilters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["quickFilters"]) || array_key_exists("quickFilters", $context) ? $context["quickFilters"] : (function () { throw new RuntimeError('Variable "quickFilters" does not exist.', 28, $this->source); })()))))) {
            // line 29
            $context["filtering"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 30
                yield "<div class=\"row\">
    <div class=\"";
                // line 31
                if ((array_key_exists("filters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 31, $this->source); })())))) {
                    yield "col-xs-6 pa-0";
                }
                yield "\">
        ";
                // line 32
                if ((array_key_exists("quickFilters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["quickFilters"]) || array_key_exists("quickFilters", $context) ? $context["quickFilters"] : (function () { throw new RuntimeError('Variable "quickFilters" does not exist.', 32, $this->source); })())))) {
                    // line 33
                    yield "        ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_quickfilters.html.twig", ["quickFilters" =>                     // line 34
(isset($context["quickFilters"]) || array_key_exists("quickFilters", $context) ? $context["quickFilters"] : (function () { throw new RuntimeError('Variable "quickFilters" does not exist.', 34, $this->source); })())]);
                    // line 35
                    yield "
        ";
                }
                // line 37
                yield "    </div>
    ";
                // line 38
                if ((array_key_exists("filters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 38, $this->source); })())))) {
                    // line 39
                    yield "    <div class=\"col-xs-6 pa-0\">
        <div class=\"dropdown-header mt-0\">";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.quick_filters.more"), "html", null, true);
                    yield "</div>
        <div class=\"pi-md\">";
                    // line 42
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_filters.html.twig", ["filters" =>                     // line 43
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 43, $this->source); })()), "target" => ((                    // line 44
array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 44, $this->source); })()), null)) : (null)), "tmpl" => ((                    // line 45
array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 45, $this->source); })()), null)) : (null))]);
                    // line 47
                    yield "</div>
    </div>
    ";
                }
                // line 50
                yield "</div>
<div class=\"row\">
    <div class=\"footer-buttons d-flex fw-nowrap gap-1 mt-lg\">
        ";
                // line 53
                yield from                 $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/search.html.twig", 53)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.reset_filter", "variant" => "secondary", "onclick" => "Mautic.resetFilters()", "size" => "lg"], ["label" => "mautic.core.apply_filter", "variant" => "primary", "onclick" => "Mautic.applyFilters()", "size" => "lg"]]]));
                // line 69
                yield "    </div>
</div>
";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            yield "
";
            // line 73
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/search.html.twig", 73)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["variant" => "ghost", "icon_only" => true, "icon" => "ri-filter-line ri-1x", "attributes" => ["type" => "button", "data-container" => "body", "data-toggle" => "popover", "data-html" => "true", "data-placement" => "left", "data-content" =>             // line 85
(isset($context["filtering"]) || array_key_exists("filtering", $context) ? $context["filtering"] : (function () { throw new RuntimeError('Variable "filtering" does not exist.', 85, $this->source); })())], "label" => "mautic.core.quick_filters"]]]));
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/search.html.twig";
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
        return array (  146 => 85,  145 => 73,  142 => 72,  136 => 69,  134 => 53,  129 => 50,  124 => 47,  122 => 45,  121 => 44,  120 => 43,  119 => 42,  115 => 40,  112 => 39,  110 => 38,  107 => 37,  103 => 35,  101 => 34,  99 => 33,  97 => 32,  91 => 31,  88 => 30,  86 => 29,  84 => 28,  63 => 26,  60 => 25,  58 => 19,  57 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/search.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/search.html.twig");
    }
}
