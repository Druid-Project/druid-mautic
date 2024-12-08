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

/* @MauticCore/Exception/traces.html.twig */
class __TwigTemplate_9f6bd3c34db7d4be9a049c84bf975d92 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "
";
        // line 59
        $context["root"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\ExceptionExtension']->getRoot();
        // line 60
        yield "
<ol>
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new RuntimeError('Variable "traces" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 63
            yield "    <li class=\"pt-3 break-word\">
    ";
            // line 64
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 64) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 64)))) {
                // line 65
                yield "        ";
                $context["traceFile"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 65), (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 65, $this->source); })())), "");
                // line 66
                yield "        <strong>
            ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["traceFile"]) || array_key_exists("traceFile", $context) ? $context["traceFile"] : (function () { throw new RuntimeError('Variable "traceFile" does not exist.', 67, $this->source); })()), "html", null, true);
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 67) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 67)))) {
                    yield ":";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 67), "html", null, true);
                }
                // line 68
                yield "        </strong>
        at
    ";
            }
            // line 71
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", true, true, false, 71) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 71)))) {
                // line 72
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 72)) {
                    // line 73
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, false, 73), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 73), "html", null, true);
                    yield "
        ";
                }
                // line 75
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 75), "html", null, true);
                yield " (
        ";
                // line 76
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "args", [], "any", true, true, false, 76) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "args", [], "any", false, false, false, 76)))) {
                    // line 77
                    yield "            
            ";
                    // line 78
                    yield CoreExtension::callMacro($macros["_self"], "macro_formatArgs", [CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "args", [], "any", false, false, false, 78)], 78, $context, $this->getSourceContext());
                    yield "
            
        ";
                }
                // line 81
                yield "        )
    ";
            }
            // line 83
            yield "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "</ol>
";
        yield from [];
    }

    // line 1
    public function macro_formatArgs($__args__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "args" => $__args__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    ";
            $context["result"] = [];
            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () { throw new RuntimeError('Variable "args" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 4
                yield "        ";
                // line 5
                yield "        ";
                if (((((is_iterable($context["item"]) && (Twig\Extension\CoreExtension::length($this->env->getCharset(),                 // line 6
$context["item"]) == 2)) && CoreExtension::getAttribute($this->env, $this->source,                 // line 7
$context["item"], 0, [], "array", true, true, false, 7)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,                 // line 8
$context["item"], 0, [], "array", false, false, false, 8))) &&  !is_iterable(CoreExtension::getAttribute($this->env, $this->source,                 // line 9
$context["item"], 0, [], "array", false, false, false, 9)))) {
                    // line 10
                    yield "
            ";
                    // line 11
                    if (("object" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 11))) {
                        // line 12
                        yield "                ";
                        $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 12), "\\");
                        // line 13
                        yield "                ";
                        $context["short"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 13, $this->source); })()), 0,  -1);
                        // line 14
                        yield "                ";
                        $context["formattedValue"] = (((("<em>object</em>(<abbr title=\"" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 14)) . "\">") . Twig\Extension\CoreExtension::last($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 14, $this->source); })()))) . "</abbr>)");
                        // line 15
                        yield "            ";
                    } elseif (("array" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 15))) {
                        // line 16
                        yield "                ";
                        $context["s"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 16))) ? (CoreExtension::callMacro($macros["_self"], "macro_formatArgs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 16)], 16, $context, $this->getSourceContext())) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 16)));
                        // line 17
                        yield "                ";
                        $context["formattedValue"] = (("<em>array</em>(" . (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 17, $this->source); })())) . ")");
                        // line 18
                        yield "            ";
                    } elseif (("string" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 18))) {
                        // line 19
                        yield "                ";
                        $context["formattedValue"] = (("'" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 19))) . "'");
                        // line 20
                        yield "            ";
                    } elseif (("null" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 20))) {
                        // line 21
                        yield "                ";
                        $context["formattedValue"] = "<em>null</em>";
                        // line 22
                        yield "            ";
                    } elseif (("boolean" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 22))) {
                        // line 23
                        yield "                ";
                        $context["s"] = json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 23));
                        // line 24
                        yield "                ";
                        $context["s"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 24, $this->source); })()));
                        // line 25
                        yield "                ";
                        $context["formattedValue"] = (("<em>" . (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 25, $this->source); })())) . "</em>");
                        // line 26
                        yield "            ";
                    } elseif (("resource" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 26))) {
                        // line 27
                        yield "                ";
                        $context["formattedValue"] = "<em>resource</em>";
                        // line 28
                        yield "            ";
                    } else {
                        // line 29
                        yield "                ";
                        $context["s"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 29));
                        // line 30
                        yield "                ";
                        $context["s"] = json_encode($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 30, $this->source); })())));
                        // line 31
                        yield "                ";
                        $context["s"] = Twig\Extension\CoreExtension::replace((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 31, $this->source); })()), ["
" => ""]);
                        // line 32
                        yield "                ";
                        $context["formattedValue"] = (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 32, $this->source); })());
                        // line 33
                        yield "            ";
                    }
                    // line 34
                    yield "        ";
                    // line 35
                    yield "        ";
                } elseif (((is_iterable($context["item"]) && Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["item"])) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", true, true, false, 35))) {
                    // line 36
                    yield "            ";
                    $context["formattedValue"] = ("<em>array</em>" . CoreExtension::callMacro($macros["_self"], "macro_formatArgs", [$context["item"]], 36, $context, $this->getSourceContext()));
                    // line 37
                    yield "        ";
                    // line 38
                    yield "        ";
                } elseif (((is_iterable($context["item"]) && Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["item"])) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["item"], 0, [], "array", true, true, false, 38))) {
                    // line 39
                    yield "            ";
                    $context["formattedValue"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 39);
                    // line 40
                    yield "        ";
                    // line 41
                    yield "        ";
                } elseif ((( !is_iterable($context["item"]) &&  !Twig\Extension\CoreExtension::testEmpty($context["item"])) && Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["item"]))) {
                    // line 42
                    yield "            ";
                    $context["formattedValue"] = (("<em>" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"])) . "</em>");
                    // line 43
                    yield "        ";
                } else {
                    // line 44
                    yield "            ";
                    $context["formattedValue"] = "";
                    // line 45
                    yield "        ";
                }
                // line 46
                yield "
        ";
                // line 48
                yield "        ";
                $context["newResult"] = ((CoreExtension::matches("/^\\d+\$/", $context["key"])) ? ((isset($context["formattedValue"]) || array_key_exists("formattedValue", $context) ? $context["formattedValue"] : (function () { throw new RuntimeError('Variable "formattedValue" does not exist.', 48, $this->source); })())) : (((("'" . $context["key"]) . "' => ") . (isset($context["formattedValue"]) || array_key_exists("formattedValue", $context) ? $context["formattedValue"] : (function () { throw new RuntimeError('Variable "formattedValue" does not exist.', 48, $this->source); })()))));
                // line 49
                yield "        ";
                $context["result"] = Twig\Extension\CoreExtension::merge((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 49, $this->source); })()), [(isset($context["newResult"]) || array_key_exists("newResult", $context) ? $context["newResult"] : (function () { throw new RuntimeError('Variable "newResult" does not exist.', 49, $this->source); })())]);
                // line 50
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "
    ";
            // line 54
            yield "    ";
            yield Twig\Extension\CoreExtension::join((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 54, $this->source); })()), ", ");
            yield " 
    ";
            // line 56
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Exception/traces.html.twig";
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
        return array (  283 => 56,  278 => 54,  275 => 52,  268 => 50,  265 => 49,  262 => 48,  259 => 46,  256 => 45,  253 => 44,  250 => 43,  247 => 42,  244 => 41,  242 => 40,  239 => 39,  236 => 38,  234 => 37,  231 => 36,  228 => 35,  226 => 34,  223 => 33,  220 => 32,  216 => 31,  213 => 30,  210 => 29,  207 => 28,  204 => 27,  201 => 26,  198 => 25,  195 => 24,  192 => 23,  189 => 22,  186 => 21,  183 => 20,  180 => 19,  177 => 18,  174 => 17,  171 => 16,  168 => 15,  165 => 14,  162 => 13,  159 => 12,  157 => 11,  154 => 10,  152 => 9,  151 => 8,  150 => 7,  149 => 6,  147 => 5,  145 => 4,  140 => 3,  137 => 2,  125 => 1,  119 => 85,  112 => 83,  108 => 81,  102 => 78,  99 => 77,  97 => 76,  92 => 75,  84 => 73,  81 => 72,  78 => 71,  73 => 68,  67 => 67,  64 => 66,  61 => 65,  59 => 64,  56 => 63,  52 => 62,  48 => 60,  46 => 59,  43 => 58,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Exception/traces.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Exception/traces.html.twig");
    }
}
