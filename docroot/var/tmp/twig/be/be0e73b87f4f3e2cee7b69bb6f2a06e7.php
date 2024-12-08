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

/* @MauticPoint/Event/generic.html.twig */
class __TwigTemplate_40d38c37e06e5a24abaddcd70fa47da1 extends Template
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
        // line 8
        $context["deleted"] = ((array_key_exists("deleted", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 8, $this->source); })()), false)) : (false));
        // line 9
        yield "<div class=\"trigger-event-row ";
        if ((isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 9, $this->source); })())) {
            yield "bg-danger";
        }
        yield "\" id=\"triggerEvent_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPoint/Event/actions.html.twig", ["deleted" =>         // line 11
(isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 11, $this->source); })()), "id" =>         // line 12
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "route" => "mautic_pointtriggerevent_action", "sessionId" => ((        // line 14
array_key_exists("sessionId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 14, $this->source); })()), "")) : (""))]);
        // line 15
        yield "
    <span class=\"trigger-event-label\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</span>
    ";
        // line 17
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17))) {
            // line 18
            yield "      <span class=\"trigger-event-descr\">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18));
            yield "</span>
    ";
        }
        // line 20
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPoint/Event/generic.html.twig";
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
        return array (  73 => 20,  67 => 18,  65 => 17,  61 => 16,  58 => 15,  56 => 14,  55 => 12,  54 => 11,  53 => 10,  44 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Event/generic.html.twig", "/app/docroot/app/bundles/PointBundle/Resources/views/Event/generic.html.twig");
    }
}
