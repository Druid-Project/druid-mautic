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

/* @MauticLead/SubscribedEvents/Timeline/donotcontact.html.twig */
class __TwigTemplate_b106230f7b8082131336d621cb013606 extends Template
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
        $context["dnc"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "dnc", [], "any", false, false, false, 5);
        // line 6
        yield "<p><strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 6, $this->source); })()), "reason", [], "any", false, false, false, 6), "html", null, true);
        yield "</strong></p>
";
        // line 7
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 7, $this->source); })()), "comments", [], "any", false, false, false, 7))) {
            // line 8
            yield "  <p class=\"small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 8, $this->source); })()), "comments", [], "any", false, false, false, 8), "html", null, true);
            yield "</p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/SubscribedEvents/Timeline/donotcontact.html.twig";
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
        return array (  51 => 8,  49 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/SubscribedEvents/Timeline/donotcontact.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/SubscribedEvents/Timeline/donotcontact.html.twig");
    }
}
