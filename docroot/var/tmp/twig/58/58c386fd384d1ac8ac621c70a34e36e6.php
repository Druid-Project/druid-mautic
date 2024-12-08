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

/* @MauticLead/SubscribedEvents/Timeline/ipadded.html.twig */
class __TwigTemplate_6b0668c6804d01bf3c9eaeadda2d648e extends Template
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
        $context["ip"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "ipDetails", [], "any", false, false, false, 5);
        // line 6
        if ($this->env->getTest('object')->getCallable()((isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 6, $this->source); })()))) {
            // line 7
            yield "  ";
            $context["details"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 7, $this->source); })()), "ipDetails", [], "any", false, false, false, 7);
            // line 8
            yield "
  ";
            // line 9
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "organization", [], "any", true, true, false, 9) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 9, $this->source); })()), "organization", [], "any", false, false, false, 9)))) {
                // line 10
                yield "      <i class=\"ri-building-2-line\"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 10, $this->source); })()), "organization", [], "array", false, false, false, 10), "html", null, true);
                yield "</i><br />
  ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/SubscribedEvents/Timeline/ipadded.html.twig";
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
        return array (  54 => 10,  52 => 9,  49 => 8,  46 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/SubscribedEvents/Timeline/ipadded.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/SubscribedEvents/Timeline/ipadded.html.twig");
    }
}
