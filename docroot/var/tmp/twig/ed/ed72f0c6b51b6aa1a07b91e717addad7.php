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

/* @MauticPoint/Event/actions.html.twig */
class __TwigTemplate_941d2e40d548aa15f52ea852a025df41 extends Template
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
        $context["action"] = (((isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 8, $this->source); })())) ? ("undelete") : ("delete"));
        // line 9
        $context["iconClass"] = (((isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 9, $this->source); })())) ? ("ri-arrow-go-back-line") : ("ri-close-line"));
        // line 10
        $context["btnClass"] = (((isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 10, $this->source); })())) ? ("btn-warning") : ("btn-danger"));
        // line 11
        $context["route"] = ((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 11, $this->source); })()), "mautic_pointtriggerevent_action")) : ("mautic_pointtriggerevent_action"));
        // line 12
        yield "<div class=\"form-buttons hide\">
    <a data-toggle=\"ajaxmodal\" data-target=\"#triggerEventModal\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 13, $this->source); })()), ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "triggerId" => (isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 13, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-xs btn-edit\">
        <i class=\"ri-edit-line\"></i>
    </a>
    <a data-menu-link=\"mautic_point_index\" data-toggle=\"ajax\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), ["objectAction" => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "triggerId" => (isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 16, $this->source); })())]), "html", null, true);
        yield "\"  class=\"btn ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 16, $this->source); })()), "html", null, true);
        yield " btn-xs\">
        <i class=\"fa ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\"></i>
    </a>
    <i class=\"ri-fw ri-more-2-line reorder-handle\"></i>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPoint/Event/actions.html.twig";
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
        return array (  65 => 17,  59 => 16,  53 => 13,  50 => 12,  48 => 11,  46 => 10,  44 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Event/actions.html.twig", "/app/docroot/app/bundles/PointBundle/Resources/views/Event/actions.html.twig");
    }
}
