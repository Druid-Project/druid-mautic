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

/* @MauticCore/Helper/list_filters.html.twig */
class __TwigTemplate_81a81387f876d62b90e2bf58f254da02 extends Template
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
        if ((array_key_exists("filters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "    <div class=\"form-group\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
                // line 4
                yield "        ";
                $context["attr"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getFilterAttributes($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 5
$context["filterName"]),                 // line 6
$context["filter"], ((                // line 7
array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 7, $this->source); })()), ".page-list")) : (".page-list")), ((                // line 8
array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })()), "list")) : ("list")));
                // line 10
                yield "        <select ";
                yield Twig\Extension\CoreExtension::join((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), " ");
                yield ">
        ";
                // line 11
                if (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "groups", [], "any", true, true, false, 11)) {
                    // line 12
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "groups", [], "any", false, false, false, 12));
                    foreach ($context['_seq'] as $context["groupLabel"] => $context["groupFilter"]) {
                        // line 13
                        yield "                <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["groupLabel"]), "html", null, true);
                        yield "\"";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["groupFilter"], "prefix", [], "any", true, true, false, 13)) {
                            yield " data-prefix=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupFilter"], "prefix", [], "any", false, false, false, 13), "html", null, true);
                            yield "\"";
                        }
                        yield ">
                    ";
                        // line 14
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["groupFilter"], "options", [], "any", true, true, false, 14)) {
                            // line 15
                            yield "                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["groupFilter"], "options", [], "any", false, false, false, 15));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 16
                                yield "                        ";
                                if (is_iterable($context["label"])) {
                                    // line 17
                                    yield "                            ";
                                    $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "value", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "value", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 17))) : (CoreExtension::getAttribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 17)));
                                    // line 18
                                    yield "                            ";
                                    $context["label"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 18), ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "title", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "title", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 18))) : (CoreExtension::getAttribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 18))))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "title", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "title", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 18))) : (CoreExtension::getAttribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 18)))));
                                    // line 19
                                    yield "                        ";
                                }
                                // line 20
                                yield "
                        ";
                                // line 21
                                $context["selected"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["groupFilter"], "values", [], "any", true, true, false, 21) && CoreExtension::inFilter($context["value"], CoreExtension::getAttribute($this->env, $this->source, $context["groupFilter"], "values", [], "any", false, false, false, 21)))) ? (" selected") : (""));
                                // line 22
                                yield "
                        ";
                                // line 23
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["groupFilter"], "prefix", [], "any", true, true, false, 23)) {
                                    // line 24
                                    yield "                            ";
                                    $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["groupFilter"], "prefix", [], "any", false, false, false, 24) . ":") . $context["value"]);
                                    // line 25
                                    yield "                        ";
                                }
                                // line 26
                                yield "                    <option value=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                                yield "\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 26, $this->source); })()), "html", null, true);
                                yield ">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                                yield "</option>
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['value'], $context['label'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 28
                            yield "                    ";
                        }
                        // line 29
                        yield "                </optgroup>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['groupLabel'], $context['groupFilter'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    yield "        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "options", [], "any", true, true, false, 31)) {
                    // line 32
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                        // line 33
                        yield "                ";
                        if (is_iterable($context["label"])) {
                            // line 34
                            yield "                    ";
                            $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "value", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "value", [], "any", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 34))) : (CoreExtension::getAttribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 34)));
                            // line 35
                            yield "                    ";
                            $context["label"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 35), ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "title", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "title", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 35))) : (CoreExtension::getAttribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 35))))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "title", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "title", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 35))) : (CoreExtension::getAttribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 35)))));
                            // line 36
                            yield "                ";
                        }
                        // line 37
                        yield "
                ";
                        // line 38
                        $context["selected"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "values", [], "any", true, true, false, 38) && CoreExtension::inFilter($context["value"], CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "values", [], "any", false, false, false, 38)))) ? (" selected") : (""));
                        // line 39
                        yield "                <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                        yield "\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 39, $this->source); })()), "html", null, true);
                        yield ">
                    ";
                        // line 40
                        ((( !CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translateLabels", [], "any", true, true, false, 40) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "translateLabels", [], "any", false, false, false, 40)))) ? (yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($context["label"])) : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true)));
                        yield "
                </option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['value'], $context['label'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    yield "        ";
                }
                // line 44
                yield "        </select>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['filterName'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
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
        return "@MauticCore/Helper/list_filters.html.twig";
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
        return array (  190 => 46,  183 => 44,  180 => 43,  171 => 40,  164 => 39,  162 => 38,  159 => 37,  156 => 36,  153 => 35,  150 => 34,  147 => 33,  142 => 32,  139 => 31,  132 => 29,  129 => 28,  116 => 26,  113 => 25,  110 => 24,  108 => 23,  105 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  83 => 15,  81 => 14,  70 => 13,  65 => 12,  63 => 11,  58 => 10,  56 => 8,  55 => 7,  54 => 6,  53 => 5,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/list_filters.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/list_filters.html.twig");
    }
}
