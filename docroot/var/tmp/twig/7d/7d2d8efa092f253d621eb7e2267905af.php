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

/* @MauticCore/Helper/table.html.twig */
class __TwigTemplate_308a8c0a59a6de177aab18f54bd47ba9 extends Template
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
        $context["class"] = ((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 1, $this->source); })()), "table")) : ("table"));
        // line 2
        $context["shortenLinkText"] = ((array_key_exists("shortenLinkText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 2, $this->source); })()), 30)) : (30));
        // line 3
        yield "<table class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 4
        if ((array_key_exists("headItems", $context) && is_iterable((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 4, $this->source); })())))) {
            // line 5
            yield "        <thead>
            <tr>
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["headItem"]) {
                // line 8
                yield "                    <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["headItem"]), "html", null, true);
                yield "</th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['headItem'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            yield "            </tr>
        </thead>
    ";
        }
        // line 13
        yield "    ";
        if ((array_key_exists("bodyItems", $context) && is_iterable((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 13, $this->source); })())))) {
            // line 14
            yield "        <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                yield "                <tr>
                    ";
                // line 17
                if (is_iterable($context["row"])) {
                    // line 18
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 19
                        yield "                            <td>
                                ";
                        // line 20
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", true, true, false, 20) && ("link" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 20)))) {
                            // line 21
                            yield "                                    <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 21), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 21), "html", null, true);
                            yield "\" ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "external", [], "any", true, true, false, 21)) {
                                yield "target=\"_blank\"";
                            } else {
                                yield "data-toggle=\"ajax\"";
                            }
                            yield ">
                                        ";
                            // line 22
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 22), 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 22, $this->source); })())), "html", null, true);
                            yield "
                                    </a>
                                ";
                        } elseif (CoreExtension::getAttribute($this->env, $this->source,                         // line 24
$context["item"], "value", [], "any", true, true, false, 24)) {
                            // line 25
                            yield "                                    ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 25), "html", null, true);
                            yield "
                                ";
                        } else {
                            // line 27
                            yield "                                    ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                            yield "
                                ";
                        }
                        // line 29
                        yield "                            </td>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    yield "                    ";
                }
                // line 32
                yield "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "        </tbody>
    ";
        }
        // line 36
        yield "</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/table.html.twig";
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
        return array (  153 => 36,  149 => 34,  142 => 32,  139 => 31,  132 => 29,  126 => 27,  120 => 25,  118 => 24,  113 => 22,  100 => 21,  98 => 20,  95 => 19,  90 => 18,  88 => 17,  85 => 16,  81 => 15,  78 => 14,  75 => 13,  70 => 10,  61 => 8,  57 => 7,  53 => 5,  51 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/table.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/table.html.twig");
    }
}
