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

/* @MauticLead/Auditlog/_table.html.twig */
class __TwigTemplate_c1c1fcf5cbb0331597fea928a3a137bb extends Template
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
        yield "<table class=\"table table-hover\">
    <tr>
        <th>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.log.field"), "html", null, true);
        yield "</th>
        <th>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.log.new_value"), "html", null, true);
        yield "</th>
        <th>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.log.old_value"), "html", null, true);
        yield "</th>
    </tr>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["values"]) {
            // line 8
            yield "        <tr>
        ";
            // line 9
            if (is_iterable($context["values"])) {
                // line 10
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["values"]) >= 2)) {
                    // line 11
                    yield "                <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"]);
                    yield "</td>
                ";
                    // line 12
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", true, true, false, 12) || CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", true, true, false, 12))) {
                        // line 13
                        yield "                        ";
                        if ((((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", true, true, false, 13) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 13))) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 13))) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 13)))) {
                            // line 14
                            yield "                            ";
                            // line 15
                            yield "                            ";
                            $context["v"] = "";
                            // line 16
                            yield "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 16));
                            foreach ($context['_seq'] as $context["l"] => $context["addedValue"]) {
                                // line 17
                                yield "                                ";
                                $context["v"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["addedValue"], ", "));
                                // line 18
                                yield "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['l'], $context['addedValue'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 19
                            yield "                            <td>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 19, $this->source); })())));
                            yield "</td>
                        ";
                        } elseif ((((CoreExtension::getAttribute($this->env, $this->source,                         // line 20
$context["values"], "added", [], "array", true, true, false, 20) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 20))) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 20))) &&  !is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 20)))) {
                            // line 21
                            yield "                            ";
                            // line 22
                            yield "                            <td>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 22)));
                            yield "</td>
                        ";
                        } else {
                            // line 24
                            yield "                            <td>&nbsp;</td>
                        ";
                        }
                        // line 26
                        yield "                        ";
                        if ((((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", true, true, false, 26) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 26))) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 26))) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 26)))) {
                            // line 27
                            yield "                            ";
                            // line 28
                            yield "                            ";
                            $context["v"] = "";
                            // line 29
                            yield "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 29));
                            foreach ($context['_seq'] as $context["l"] => $context["removedValue"]) {
                                // line 30
                                yield "                                ";
                                $context["v"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["removedValue"], ", "));
                                // line 31
                                yield "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['l'], $context['removedValue'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 32
                            yield "                            <td>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 32, $this->source); })())));
                            yield "</td>
                        ";
                        } elseif ((((CoreExtension::getAttribute($this->env, $this->source,                         // line 33
$context["values"], "removed", [], "array", true, true, false, 33) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 33))) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 33))) &&  !is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 33)))) {
                            // line 34
                            yield "                            ";
                            // line 35
                            yield "                            <td>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 35)));
                            yield "</td>
                        ";
                        } else {
                            // line 37
                            yield "                            <td>&nbsp;</td>
                        ";
                        }
                        // line 39
                        yield "                ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], 0, [], "array", true, true, false, 39) || CoreExtension::getAttribute($this->env, $this->source, $context["values"], 1, [], "array", true, true, false, 39))) {
                        // line 40
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], 1, [], "array", true, true, false, 40) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["values"], 1, [], "array", false, false, false, 40)))) {
                            // line 41
                            yield "                            <td>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue(CoreExtension::getAttribute($this->env, $this->source, $context["values"], 1, [], "array", false, false, false, 41)));
                            yield "</td>
                        ";
                        } else {
                            // line 43
                            yield "                            <td>&nbsp;</td>
                        ";
                        }
                        // line 45
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], 0, [], "array", true, true, false, 45) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["values"], 0, [], "array", false, false, false, 45)))) {
                            // line 46
                            yield "                            <td>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue(CoreExtension::getAttribute($this->env, $this->source, $context["values"], 0, [], "array", false, false, false, 46)));
                            yield "</td>
                        ";
                        } else {
                            // line 48
                            yield "                            <td>&nbsp;</td>
                        ";
                        }
                        // line 50
                        yield "                ";
                    }
                    // line 51
                    yield "            ";
                } else {
                    // line 52
                    yield "                ";
                    $context["v"] = "";
                    // line 53
                    yield "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["values"]);
                    foreach ($context['_seq'] as $context["k"] => $context["value"]) {
                        // line 54
                        yield "                    ";
                        $context["v"] = (($context["k"] . ": ") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["value"], ", ")));
                        // line 55
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['k'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    yield "                <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"]);
                    yield "</td>
                <td>";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 57, $this->source); })()));
                    yield "</td>
                <td>&nbsp;</td>
            ";
                }
                // line 60
                yield "        ";
            } else {
                // line 61
                yield "            <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"]);
                yield "</td>
            <td>";
                // line 62
                if ($this->env->getTest('string')->getCallable()($context["values"])) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue($context["values"]));
                }
                yield "</td>
            <td>&nbsp;</td>
        ";
            }
            // line 65
            yield "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['values'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "</table>\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Auditlog/_table.html.twig";
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
        return array (  246 => 67,  239 => 65,  231 => 62,  226 => 61,  223 => 60,  217 => 57,  212 => 56,  206 => 55,  203 => 54,  198 => 53,  195 => 52,  192 => 51,  189 => 50,  185 => 48,  179 => 46,  176 => 45,  172 => 43,  166 => 41,  163 => 40,  160 => 39,  156 => 37,  150 => 35,  148 => 34,  146 => 33,  141 => 32,  135 => 31,  132 => 30,  127 => 29,  124 => 28,  122 => 27,  119 => 26,  115 => 24,  109 => 22,  107 => 21,  105 => 20,  100 => 19,  94 => 18,  91 => 17,  86 => 16,  83 => 15,  81 => 14,  78 => 13,  76 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  59 => 7,  54 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Auditlog/_table.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Auditlog/_table.html.twig");
    }
}
