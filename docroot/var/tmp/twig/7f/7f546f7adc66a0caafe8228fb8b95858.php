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

/* @MauticCore/Offline/offline.html.twig */
class __TwigTemplate_75bfc82c077fc3f849e1c799569d658b extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Site is offline</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "assetBase", [], "any", false, false, false, 10), "html", null, true);
        yield "/images/favicon.ico\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "mediaBase", [], "any", false, false, false, 11), "html", null, true);
        yield "/css/libraries.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "mediaBase", [], "any", false, false, false, 12), "html", null, true);
        yield "/css/app.css\"/>
</head>
<body>
<div class=\"container\">
    <div class=\"row\">
        ";
        // line 17
        if ((array_key_exists("error", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())))) {
            // line 18
            yield "        <div class=\"";
            yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "isPrevious", [], "any", true, true, false, 18) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "isPrevious", [], "any", false, false, false, 18))) || (array_key_exists("inline", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 18, $this->source); })()))))) ? ("col-sm-12") : ("col-sm-offset-2 col-sm-8"));
            yield "\">
            <div class=\"pa-sm\" style=\" word-wrap: break-word;";
            // line 19
            if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "isPrevious", [], "any", true, true, false, 19) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "isPrevious", [], "any", false, false, false, 19))) && ( !array_key_exists("inline", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 19, $this->source); })()))))) {
                yield " margin-top:100px;";
            }
            yield "\">
            ";
            // line 20
            if ((array_key_exists("inline", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 20, $this->source); })())))) {
                // line 21
                yield "                <h3><i class=\"ri-alert-line ri-fw text-danger pull-left\"></i>";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "message", [], "any", false, false, false, 21);
                yield "</h3>
                <h6 class=\"text-muted\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "file", [], "any", false, false, false, 22) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "line", [], "any", false, false, false, 22)), "html", null, true);
                yield "</h6>
            ";
            } else {
                // line 24
                yield "                <div class=\"text-center\">
                    <i class=\"ri-alert-line ri-5x\"></i>
                </div>
                <div class=\"alert alert-danger\">
                    <div>";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "message", [], "any", false, false, false, 28);
                yield "</div>
                    <div class=\"text-muted small text-right mt-10\">
                        ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "file", [], "any", false, false, false, 30) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "line", [], "any", false, false, false, 30)), "html", null, true);
                yield "
                    </div>
                </div>
            ";
            }
            // line 34
            yield "
            ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "trace", [], "any", true, true, false, 35) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "trace", [], "any", false, false, false, 35)))) {
                // line 36
                yield "            <div class=\"well well-sm\" tabindex=\"-1\" style=\"";
                yield ((( !array_key_exists("inline", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 36, $this->source); })())))) ? ("") : ("max-height: 100px; overflow: scroll;"));
                yield "\" onclick=\"this.focus();\">
                ";
                // line 37
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "trace", [], "any", true, true, false, 37) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })()), "trace", [], "any", false, false, false, 37))) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })()), "trace", [], "any", false, false, false, 37)))) {
                    // line 38
                    yield "                    ";
                    yield from                     $this->loadTemplate("traces.html.twig", "@MauticCore/Offline/offline.html.twig", 38)->unwrap()->yield(CoreExtension::merge($context, ["traces" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "trace", [], "any", false, false, false, 38)]));
                    // line 39
                    yield "                ";
                } else {
                    // line 40
                    yield "                    <pre>";
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })()), "trace", [], "any", false, false, false, 40);
                    yield "</pre>;
                ";
                }
                // line 42
                yield "                <div class=\"clearfix\"></div>
            ";
            }
            // line 44
            yield "        <div id=\"previous\"></div>
    </div>
    ";
        } elseif ((        // line 46
array_key_exists("inline", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 46, $this->source); })())))) {
            // line 47
            yield "    <div class=\"col-xs-12\">
        <h3><i class=\"ri-alert-line ri-fw text-danger\"></i>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "message", [], "any", false, false, false, 48), "html", null, true);
            yield "</h3>
        ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "submessage", [], "any", true, true, false, 49) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })()), "submessage", [], "any", false, false, false, 49)))) {
                // line 50
                yield "        <h4 class=\"mt-15\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })()), "submessage", [], "any", false, false, false, 50);
                yield "</h4>
        ";
            }
            // line 52
            yield "    </div>
    ";
        } else {
            // line 54
            yield "    <div class=\"col-sm-offset-3 col-sm-6\">
        <div class=\"pa-lg text-center\" style=\"margin-top:100px;\">
            <i class=\"ri-alert-line ri-5x\"></i>
            <h2>";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 57, $this->source); })()), "message", [], "any", false, false, false, 57);
            yield "</h2>
            ";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "submessage", [], "any", true, true, false, 58) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 58, $this->source); })()), "submessage", [], "any", false, false, false, 58)))) {
                // line 59
                yield "                <h4 class=\"mt-15\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })()), "submessage", [], "any", false, false, false, 59);
                yield "</h4>
            ";
            }
            // line 61
            yield "        </div>
    ";
        }
        // line 63
        yield "    </div>
</div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Offline/offline.html.twig";
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
        return array (  186 => 63,  182 => 61,  176 => 59,  174 => 58,  170 => 57,  165 => 54,  161 => 52,  155 => 50,  153 => 49,  149 => 48,  146 => 47,  144 => 46,  140 => 44,  136 => 42,  130 => 40,  127 => 39,  124 => 38,  122 => 37,  117 => 36,  115 => 35,  112 => 34,  105 => 30,  100 => 28,  94 => 24,  89 => 22,  84 => 21,  82 => 20,  76 => 19,  71 => 18,  69 => 17,  61 => 12,  57 => 11,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Offline/offline.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Offline/offline.html.twig");
    }
}
