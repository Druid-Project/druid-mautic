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

/* @MauticNotification/Notification/preview.html.twig */
class __TwigTemplate_607bad35a5fa7fdd4f543992e95571c1 extends Template
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
        // line 5
        yield "<label>Preview</label>
<div id=\"notification-preview\" class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"icon height-auto text-center\">
                <span class=\"ri-notification-3-fill fs-48\"></span>
            </div>
            <div class=\"text height-auto\">
                <h4>";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 14, $this->source); })()), "heading", [], "any", false, false, false, 14)) {
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 15, $this->source); })()), "heading", [], "any", false, false, false, 15), "html", null, true);
        } else {
            // line 17
            yield "Your notification header";
        }
        // line 19
        yield "</h4>
                <p>";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 21, $this->source); })()), "message", [], "any", false, false, false, 21)) {
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 22, $this->source); })()), "message", [], "any", false, false, false, 22), "html", null, true);
        } else {
            // line 24
            yield "The message body of your notification";
        }
        // line 26
        yield "</p>
                <span>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "server", [], "any", false, false, false, 27), "get", ["HTTP_HOST"], "method", false, false, false, 27), "html", null, true);
        yield "</span>
            </div>
        </div>
        ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 30, $this->source); })()), "url", [], "any", false, false, false, 30) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 30, $this->source); })()), "button", [], "any", false, false, false, 30))) {
            // line 31
            yield "            <hr>
            <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 32, $this->source); })()), "url", [], "any", false, false, false, 32), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 32, $this->source); })()), "button", [], "any", false, false, false, 32), "html", null, true);
            yield "</a>
        ";
        }
        // line 34
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
        return "@MauticNotification/Notification/preview.html.twig";
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
        return array (  92 => 34,  85 => 32,  82 => 31,  80 => 30,  74 => 27,  71 => 26,  68 => 24,  65 => 22,  63 => 21,  60 => 19,  57 => 17,  54 => 15,  52 => 14,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/Notification/preview.html.twig", "/app/docroot/app/bundles/NotificationBundle/Resources/views/Notification/preview.html.twig");
    }
}
