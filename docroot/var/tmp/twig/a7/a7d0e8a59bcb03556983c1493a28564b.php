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

/* @MauticCore/Notification/notification.html.twig */
class __TwigTemplate_1e798751384e53a826fa79044059ed76 extends Template
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
        yield "<div class=\"alert ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["n"] ?? null), "type", [], "any", true, true, false, 1)) {
            yield "alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 1, $this->source); })()), "type", [], "any", false, false, false, 1), "html", null, true);
        }
        yield " ma-0 bdr-b notification\" id=\"notification";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        yield "\">
    <div class=\"media-body notification\">
        <div class=\"text-muted fw-b mb-xs ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["n"] ?? null), "type", [], "any", true, true, false, 3)) {
            yield "ml-lg";
        }
        yield "\">
            ";
        // line 4
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toHumanized(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 4, $this->source); })()), "dateAdded", [], "any", false, false, false, 4));
        yield "
            ";
        // line 5
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 5, $this->source); })()), "isRead", [], "any", false, false, false, 5)) {
            // line 6
            yield "                <span class=\"is-unread text-danger\"><i class=\"ri-asterisk\"></i></span>
            ";
        }
        // line 8
        yield "        </div>
        ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 9, $this->source); })()), "header", [], "any", false, false, false, 9)) {
            // line 10
            yield "            <div class=\"notification-header fs-b-e fw-b mb-3 mt-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 10, $this->source); })()), "header", [], "any", false, false, false, 10))), "html", null, true);
            yield "</div>
        ";
        }
        // line 12
        yield "        <div class=\"text-muted\">";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 12, $this->source); })()), "message", [], "any", false, false, false, 12), "html");
        yield "</div>
    </div>
    ";
        // line 14
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Notification/notification.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["variant" => "ghost", "icon_only" => true, "icon" => "ri-close-line do-not-close", "label" => "mautic.core.notifications.clear", "size" => "xs", "attributes" => ["class" => "pull-right close do-not-close"], "onclick" => (("Mautic.clearNotification(" . CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)) . ");")]]]));
        // line 29
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Notification/notification.html.twig";
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
        return array (  89 => 29,  87 => 25,  86 => 14,  80 => 12,  74 => 10,  72 => 9,  69 => 8,  65 => 6,  63 => 5,  59 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Notification/notification.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Notification/notification.html.twig");
    }
}
