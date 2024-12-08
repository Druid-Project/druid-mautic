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

/* @MauticForm/Action/_generic.html.twig */
class __TwigTemplate_1ff835028d7a94540c71a616e9a63a77 extends Template
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
        // line 7
        yield "<div class=\"mauticform-row panel ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "settings", [], "any", false, true, false, 7), "allowCampaignForm", [], "any", true, true, false, 7)) {
            yield "action-standalone-only";
        }
        yield "\" id=\"mauticform_action_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 8
        if (array_key_exists("inForm", $context)) {
            // line 9
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Builder/_actions.html.twig", ["id" =>             // line 10
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })()), "route" => "mautic_formaction_action", "actionType" => "action", "formId" =>             // line 13
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 13, $this->source); })())]);
            // line 14
            yield "
    ";
        }
        // line 16
        yield "    <a data-toggle=\"ajaxmodal\" data-target=\"#formComponentModal\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_formaction_action", ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 16, $this->source); })())]), "html", null, true);
        yield "\"><span class=\"action-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</span></a>
    ";
        // line 17
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17))) {
            // line 18
            yield "      <span class=\"action-descr\">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18));
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
        return "@MauticForm/Action/_generic.html.twig";
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
        return array (  77 => 20,  71 => 18,  69 => 17,  62 => 16,  58 => 14,  56 => 13,  55 => 10,  53 => 9,  51 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Action/_generic.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Action/_generic.html.twig");
    }
}
