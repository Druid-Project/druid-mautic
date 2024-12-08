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

/* @MauticCore/Notification/inline_notification.html.twig */
class __TwigTemplate_5eb50cda68496f8358f10c02f56cdd73 extends Template
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
        $context["pathSegments"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "pathinfo", [], "any", false, false, false, 1), "/", "left"), "/");
        // line 2
        $context["lastSegment"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), (isset($context["pathSegments"]) || array_key_exists("pathSegments", $context) ? $context["pathSegments"] : (function () { throw new RuntimeError('Variable "pathSegments" does not exist.', 2, $this->source); })()));
        // line 3
        yield "
";
        // line 4
        if ((array_key_exists("lastSegment", $context) && CoreExtension::matches("/^\\d+\$/", (isset($context["lastSegment"]) || array_key_exists("lastSegment", $context) ? $context["lastSegment"] : (function () { throw new RuntimeError('Variable "lastSegment" does not exist.', 4, $this->source); })())))) {
            // line 5
            yield "    ";
            $context["cleanedPath"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["pathSegments"]) || array_key_exists("pathSegments", $context) ? $context["pathSegments"] : (function () { throw new RuntimeError('Variable "pathSegments" does not exist.', 5, $this->source); })()), 0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pathSegments"]) || array_key_exists("pathSegments", $context) ? $context["pathSegments"] : (function () { throw new RuntimeError('Variable "pathSegments" does not exist.', 5, $this->source); })())) - 1));
        } else {
            // line 7
            yield "    ";
            $context["cleanedPath"] = (isset($context["pathSegments"]) || array_key_exists("pathSegments", $context) ? $context["pathSegments"] : (function () { throw new RuntimeError('Variable "pathSegments" does not exist.', 7, $this->source); })());
        }
        // line 9
        yield "
";
        // line 10
        $context["cleanedPathString"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::join((isset($context["cleanedPath"]) || array_key_exists("cleanedPath", $context) ? $context["cleanedPath"] : (function () { throw new RuntimeError('Variable "cleanedPath" does not exist.', 10, $this->source); })()), "-"), [" " => "_"]));
        // line 11
        $context["sanitizedTitle"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), ["." => "-"]));
        // line 12
        $context["alertId"] = (((((((isset($context["dismissible"]) || array_key_exists("dismissible", $context) ? $context["dismissible"] : (function () { throw new RuntimeError('Variable "dismissible" does not exist.', 12, $this->source); })())) ? ("dismissible-") : ("")) . "alert-") . (isset($context["cleanedPathString"]) || array_key_exists("cleanedPathString", $context) ? $context["cleanedPathString"] : (function () { throw new RuntimeError('Variable "cleanedPathString" does not exist.', 12, $this->source); })())) . "-") . (isset($context["sanitizedTitle"]) || array_key_exists("sanitizedTitle", $context) ? $context["sanitizedTitle"] : (function () { throw new RuntimeError('Variable "sanitizedTitle" does not exist.', 12, $this->source); })()));
        // line 13
        yield "
<div id=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alertId"]) || array_key_exists("alertId", $context) ? $context["alertId"] : (function () { throw new RuntimeError('Variable "alertId" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" class=\"alert alert-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alert_type"]) || array_key_exists("alert_type", $context) ? $context["alert_type"] : (function () { throw new RuntimeError('Variable "alert_type" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\">
    <div class=\"d-flex fd-column fd-row-md jc-space-between fg-1\">
        <div class=\"d-flex ai-center fw-wrap mr-xs\">
            <strong class=\"mr-xs\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "</strong>
            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 18, $this->source); })())), "html", null, true);
        yield "
        </div>

        ";
        // line 21
        if ((array_key_exists("action_label", $context) && array_key_exists("action_link", $context))) {
            // line 22
            yield "            <a class=\"fs-0";
            if ((isset($context["dismissible"]) || array_key_exists("dismissible", $context) ? $context["dismissible"] : (function () { throw new RuntimeError('Variable "dismissible" does not exist.', 22, $this->source); })())) {
                yield " mr-lg";
            }
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action_link"]) || array_key_exists("action_link", $context) ? $context["action_link"] : (function () { throw new RuntimeError('Variable "action_link" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["action_label"]) || array_key_exists("action_label", $context) ? $context["action_label"] : (function () { throw new RuntimeError('Variable "action_label" does not exist.', 22, $this->source); })())), "html", null, true);
            yield "</a>
        ";
        }
        // line 24
        yield "
        ";
        // line 25
        if ((isset($context["dismissible"]) || array_key_exists("dismissible", $context) ? $context["dismissible"] : (function () { throw new RuntimeError('Variable "dismissible" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "            <button type=\"button\" class=\"close\" user-dismiss=\"alert\" aria-hidden=\"true\"><i class=\"ri-close-line\"></i></button>
        ";
        }
        // line 28
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Notification/inline_notification.html.twig";
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
        return array (  112 => 28,  108 => 26,  106 => 25,  103 => 24,  91 => 22,  89 => 21,  83 => 18,  79 => 17,  71 => 14,  68 => 13,  66 => 12,  64 => 11,  62 => 10,  59 => 9,  55 => 7,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Notification/inline_notification.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Notification/inline_notification.html.twig");
    }
}
