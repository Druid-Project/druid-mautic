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

/* @MauticNotification/MobileNotification/preview.html.twig */
class __TwigTemplate_ab918a38ffb9ed98e22e1961b8489a78 extends Template
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
        yield "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 8, $this->source); })()), "heading", [], "any", false, false, false, 8), "html", null, true);
        yield "
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 9, $this->source); })()), "url", [], "any", false, false, false, 9)) {
            // line 10
            yield "            <span class=\"pull-right\">
                <a href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 11, $this->source); })()), "url", [], "any", false, false, false, 11), "html", null, true);
            yield "\" target=\"_blank\"><span class=\"ri-external-link-line\"></span></a>
            </span>
            ";
        }
        // line 14
        yield "        </h3>
    </div>
    <div class=\"panel-body\">
        <p>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
        ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 18, $this->source); })()), "button", [], "any", false, false, false, 18))) {
            // line 19
            yield "            <br>
            <p><a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20), "html", null, true);
            yield "\" class=\"btn btn-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 20, $this->source); })()), "button", [], "any", false, false, false, 20), "html", null, true);
            yield "</a></p>
        ";
        }
        // line 22
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
        return "@MauticNotification/MobileNotification/preview.html.twig";
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
        return array (  83 => 22,  76 => 20,  73 => 19,  71 => 18,  67 => 17,  62 => 14,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/MobileNotification/preview.html.twig", "/app/docroot/app/bundles/NotificationBundle/Resources/views/MobileNotification/preview.html.twig");
    }
}
