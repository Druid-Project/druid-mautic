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

/* @MauticCore/Exception/base.html.twig */
class __TwigTemplate_94a785acf27a9244cb59e7828096300a extends Template
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

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'pageTitle' => [$this, 'block_pageTitle'],
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 32
        return $this->loadTemplate((isset($context["baseTemplate"]) || array_key_exists("baseTemplate", $context) ? $context["baseTemplate"] : (function () { throw new RuntimeError('Variable "baseTemplate" does not exist.', 32, $this->source); })()), "@MauticCore/Exception/base.html.twig", 32);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        $context["message"] = ((array_key_exists("message", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), "mautic.core.error.generic")) : ("mautic.core.error.generic"));
        // line 17
        $context["previousExceptions"] = [];
        // line 18
        $context["exceptionMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 18, $this->source); })()), "message", [], "any", false, false, false, 18);
        // line 19
        if ((array_key_exists("exceptionMessage", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 19, $this->source); })())))) {
            // line 20
            $context["exceptionMessage"] = (" - " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 20, $this->source); })()), "message", [], "any", false, false, false, 20));
        }
        // line 22
        $context["previousExceptions"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 22, $this->source); })()), "previous", [], "any", false, false, false, 22);
        // line 24
        $context["isInline"] = (($context["inline"]) ?? (false));
        // line 25
        $context["isAjax"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 25), "isxmlhttprequest", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 25), "isxmlhttprequest", [], "any", false, false, false, 25)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 25), "isxmlhttprequest", [], "any", false, false, false, 25)) : (false));
        // line 26
        $context["src"] = ((array_key_exists("src", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 26, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave"))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave")));
        // line 28
        $context["headerTitle"] = ((array_key_exists("headerTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 28, $this->source); })()), "")) : (""));
        // line 29
        $context["pageTitle"] = ((array_key_exists("pageTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 29, $this->source); })()), "Mautic")) : ("Mautic"));
        // line 31
        if (((isset($context["isAjax"]) || array_key_exists("isAjax", $context) ? $context["isAjax"] : (function () { throw new RuntimeError('Variable "isAjax" does not exist.', 31, $this->source); })()) == false)) {
            // line 34
            $context["headerTitle"] = ((((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 34, $this->source); })()) == false)) ? ((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 34, $this->source); })()) . " ") . (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 34, $this->source); })()))) : ((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 34, $this->source); })())));
            // line 35
            $context["pageTitle"] = ((((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 35, $this->source); })()) == false)) ? ((isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 35, $this->source); })())) : ((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 35, $this->source); })())));
        }
        // line 32
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 38, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 39, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "
    <div class=\"pa-20 mautibot-error";
        // line 43
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 43, $this->source); })())) {
            yield " inline";
        }
        yield "\">

        <div class=\"row\">
            ";
        // line 46
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 46, $this->source); })())) {
            // line 47
            yield "            <div class=\"mautibot-content col-xs-12\">
                <h3><i class=\"ri-alert-line ri-fw text-danger\"></i><strong>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 48, $this->source); })()), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "</h3>
            </div>
            ";
        } else {
            // line 51
            yield "            <div class=\"mautibot-image col-xs-4 col-md-3\">
                <img class=\"img-responsive mautibot\" src=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "\" />
            </div>
            <div class=\"mautibot-content col-xs-8 col-md-9\">
                <blockquote class=\"np break-word\">
                    <h2><i class=\"ri-double-quotes-l\"></i> <strong>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 56, $this->source); })()), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 56, $this->source); })()), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 56, $this->source); })()), "html", null, true);
            yield " <i class=\"ri-double-quotes-r\"></i></h2>
                    <footer class=\"text-right\">Mautibot</footer>
                </blockquote>
                <div class=\"pull-right\">
                    <a class=\"text-muted\" href=\"http://mau.tc/report-issue\" target=\"_new\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.report_issue"), "html", null, true);
            yield "</a>
                </div>
            </div>
            ";
        }
        // line 64
        yield "        </div>

        ";
        // line 66
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 66, $this->source); })())) {
            // line 67
            yield "        <div class=\"slimscroll\" style=\"max-height: 200px;\">
        ";
        } else {
            // line 69
            yield "        <div>
        ";
        }
        // line 71
        yield "
            <div class=\"row mt-20\">
                <div class=\"col-sm-12\">
                    <h5 class=\"ml-lg text-danger\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 74, $this->source); })()), "class", [], "any", false, false, false, 74), "html", null, true);
        yield "</h5>
                    <div class=\"well well-sm ma-md\">
                        ";
        // line 76
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Exception/traces.html.twig", ["traces" => CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 77, $this->source); })()), "trace", [], "any", false, false, false, 77)]);
        // line 78
        yield "
                    </div>
                </div>
            </div>

            ";
        // line 83
        if (((isset($context["previousExceptions"]) || array_key_exists("previousExceptions", $context) ? $context["previousExceptions"] : (function () { throw new RuntimeError('Variable "previousExceptions" does not exist.', 83, $this->source); })()) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["previousExceptions"]) || array_key_exists("previousExceptions", $context) ? $context["previousExceptions"] : (function () { throw new RuntimeError('Variable "previousExceptions" does not exist.', 83, $this->source); })())) > 0))) {
            // line 84
            yield "            <div class=\"row mt-20\">
                <div class=\"col-sm-12\">
                    <h5 class=\"ml-lg\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.error.previousexceptions"), "html", null, true);
            yield "</h5>
                    <div class=\"panel-group\" id=\"previous\" role=\"tablist\" aria-multiselectable=\"true\">
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["previousExceptions"]) || array_key_exists("previousExceptions", $context) ? $context["previousExceptions"] : (function () { throw new RuntimeError('Variable "previousExceptions" does not exist.', 88, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["e"]) {
                // line 89
                yield "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"previous_heading_";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">
                                <h4 class=\"panel-title pa-sm\">
                                    <a data-toggle=\"collapse\" data-parent=\"#previous\" href=\"#previous_body_";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                        ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 93), "html", null, true);
                yield "
                                    </a>
                                </h4>
                            </div>
                            <div id=\"previous_body_";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                <div class=\"panel-body\">
                                    <div class=\"pa-sm\">
                                        ";
                // line 100
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Exception/traces.html.twig", ["traces" => CoreExtension::getAttribute($this->env, $this->source,                 // line 101
$context["e"], "trace", [], "any", false, false, false, 101)]);
                // line 102
                yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "                    </div>
                </div>
            ";
        }
        // line 111
        yield "            </div>
            
        
        </div>
    </div>
    <div class=\"clearfix\"></div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Exception/base.html.twig";
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
        return array (  278 => 111,  273 => 108,  254 => 102,  252 => 101,  251 => 100,  245 => 97,  238 => 93,  234 => 92,  229 => 90,  226 => 89,  209 => 88,  204 => 86,  200 => 84,  198 => 83,  191 => 78,  189 => 77,  188 => 76,  183 => 74,  178 => 71,  174 => 69,  170 => 67,  168 => 66,  164 => 64,  157 => 60,  147 => 56,  140 => 52,  137 => 51,  128 => 48,  125 => 47,  123 => 46,  115 => 43,  112 => 42,  105 => 41,  94 => 39,  83 => 38,  79 => 32,  76 => 35,  74 => 34,  72 => 31,  70 => 29,  68 => 28,  66 => 26,  64 => 25,  62 => 24,  60 => 22,  57 => 20,  55 => 19,  53 => 18,  51 => 17,  49 => 16,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Exception/base.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Exception/base.html.twig");
    }
}
