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

/* @MauticCore/Helper/list_quickfilters.html.twig */
class __TwigTemplate_0099f2cef1e0e50f0595aef6c046b7ef extends Template
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
        if ((array_key_exists("quickFilters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["quickFilters"]) || array_key_exists("quickFilters", $context) ? $context["quickFilters"] : (function () { throw new RuntimeError('Variable "quickFilters" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "    ";
            $context["filterGroups"] = ["mautic.core.quick_filters.status" => "ispublished|isunpublished", "mautic.core.quick_filters.ownership" => "ismine|isunowned", "mautic.core.quick_filters.others" => ""];
            // line 7
            yield "
    ";
            // line 8
            $context["visibleGroups"] = [];
            // line 9
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filterGroups"]) || array_key_exists("filterGroups", $context) ? $context["filterGroups"] : (function () { throw new RuntimeError('Variable "filterGroups" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["header"] => $context["pattern"]) {
                // line 10
                yield "        ";
                $context["groupFilters"] = (($context["pattern"]) ? (Twig\Extension\CoreExtension::filter($this->env,                 // line 11
(isset($context["quickFilters"]) || array_key_exists("quickFilters", $context) ? $context["quickFilters"] : (function () { throw new RuntimeError('Variable "quickFilters" does not exist.', 11, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return CoreExtension::matches((("/" . $context["pattern"]) . "/"), CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 11, $this->source); })()), "search", [], "any", false, false, false, 11)); })) : (Twig\Extension\CoreExtension::filter($this->env,                 // line 12
(isset($context["quickFilters"]) || array_key_exists("quickFilters", $context) ? $context["quickFilters"] : (function () { throw new RuntimeError('Variable "quickFilters" does not exist.', 12, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return  !CoreExtension::matches("/ispublished|isunpublished|ismine|isunowned/", CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 12, $this->source); })()), "search", [], "any", false, false, false, 12)); })));
                // line 14
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["groupFilters"]) || array_key_exists("groupFilters", $context) ? $context["groupFilters"] : (function () { throw new RuntimeError('Variable "groupFilters" does not exist.', 14, $this->source); })()))) {
                    // line 15
                    yield "            ";
                    $context["visibleGroups"] = Twig\Extension\CoreExtension::merge((isset($context["visibleGroups"]) || array_key_exists("visibleGroups", $context) ? $context["visibleGroups"] : (function () { throw new RuntimeError('Variable "visibleGroups" does not exist.', 15, $this->source); })()), [$context["header"]]);
                    // line 16
                    yield "        ";
                }
                // line 17
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['header'], $context['pattern'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "
    <div class=\"d-flex fd-column gap-xs\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filterGroups"]) || array_key_exists("filterGroups", $context) ? $context["filterGroups"] : (function () { throw new RuntimeError('Variable "filterGroups" does not exist.', 20, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["header"] => $context["pattern"]) {
                // line 21
                yield "            ";
                $context["groupFilters"] = (($context["pattern"]) ? (Twig\Extension\CoreExtension::filter($this->env,                 // line 22
(isset($context["quickFilters"]) || array_key_exists("quickFilters", $context) ? $context["quickFilters"] : (function () { throw new RuntimeError('Variable "quickFilters" does not exist.', 22, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return CoreExtension::matches((("/" . $context["pattern"]) . "/"), CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 22, $this->source); })()), "search", [], "any", false, false, false, 22)); })) : (Twig\Extension\CoreExtension::filter($this->env,                 // line 23
(isset($context["quickFilters"]) || array_key_exists("quickFilters", $context) ? $context["quickFilters"] : (function () { throw new RuntimeError('Variable "quickFilters" does not exist.', 23, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return  !CoreExtension::matches("/ispublished|isunpublished|ismine|isunowned/", CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 23, $this->source); })()), "search", [], "any", false, false, false, 23)); })));
                // line 25
                yield "
            ";
                // line 26
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["groupFilters"]) || array_key_exists("groupFilters", $context) ? $context["groupFilters"] : (function () { throw new RuntimeError('Variable "groupFilters" does not exist.', 26, $this->source); })()))) {
                    // line 27
                    yield "                <div class=\"dropdown-header";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 27) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["visibleGroups"]) || array_key_exists("visibleGroups", $context) ? $context["visibleGroups"] : (function () { throw new RuntimeError('Variable "visibleGroups" does not exist.', 27, $this->source); })())) == 1))) {
                        yield " mt-0";
                    }
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["header"]), "html", null, true);
                    yield "</div>
                <div class=\"d-flex gap-xs pi-md fw-wrap\">
                    ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupFilters"]) || array_key_exists("groupFilters", $context) ? $context["groupFilters"] : (function () { throw new RuntimeError('Variable "groupFilters" does not exist.', 29, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                        // line 30
                        yield "                        <a class=\"label label-outline label-selectable\"
                        data-filter=\"";
                        // line 31
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "search", [], "any", false, false, false, 31)), "html", null, true);
                        yield "\"
                        ";
                        // line 32
                        if (($context["header"] == "mautic.core.quick_filters.status")) {
                            // line 33
                            yield "                            data-conflict-group=\"status\"
                        ";
                        } elseif ((                        // line 34
$context["header"] == "mautic.core.quick_filters.ownership")) {
                            // line 35
                            yield "                            data-conflict-group=\"ownership\"
                        ";
                        }
                        // line 37
                        yield "                        onclick=\"Mautic.toggleFilter(this)\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        data-original-title=\"";
                        // line 40
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "tooltip", [], "any", false, false, false, 40)), "html", null, true);
                        yield "\">
                            <i class=\"";
                        // line 41
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "icon", [], "any", false, false, false, 41), "html", null, true);
                        yield "\"></i>
                            ";
                        // line 42
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 42)), "html", null, true);
                        yield "
                        </a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    yield "                </div>
            ";
                }
                // line 47
                yield "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['header'], $context['pattern'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/list_quickfilters.html.twig";
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
        return array (  180 => 48,  166 => 47,  162 => 45,  153 => 42,  149 => 41,  145 => 40,  140 => 37,  136 => 35,  134 => 34,  131 => 33,  129 => 32,  125 => 31,  122 => 30,  118 => 29,  108 => 27,  106 => 26,  103 => 25,  101 => 23,  100 => 22,  98 => 21,  81 => 20,  77 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  60 => 12,  59 => 11,  57 => 10,  52 => 9,  50 => 8,  47 => 7,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/list_quickfilters.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/list_quickfilters.html.twig");
    }
}
