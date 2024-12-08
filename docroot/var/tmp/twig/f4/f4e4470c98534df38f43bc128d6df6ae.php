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

/* @MauticForm/Builder/_actions.html.twig */
class __TwigTemplate_e5358e55f16906e6f461cc1ad2f782a2 extends Template
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
        $context["route"] = ((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 8, $this->source); })()), "mautic_formfield_action")) : ("mautic_formfield_action"));
        // line 9
        yield "
<div class=\"form-buttons btn-group\" role=\"group\" aria-label=\"Field options\">
  ";
        // line 11
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticForm/Builder/_actions.html.twig", 11)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["variant" => "ghost", "label" => "mautic.core.form.edit", "icon_only" => true, "icon" => "ri-edit-line text-primary", "size" => "sm", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(        // line 19
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 19, $this->source); })())]), "attributes" => ["data-toggle" => "ajaxmodal", "data-target" => "#formComponentModal", "class" => "btn-edit"]]]]));
        // line 28
        yield "
  ";
        // line 29
        if (( !array_key_exists("disallowDelete", $context) || (array_key_exists("disallowDelete", $context) && (false == (isset($context["disallowDelete"]) || array_key_exists("disallowDelete", $context) ? $context["disallowDelete"] : (function () { throw new RuntimeError('Variable "disallowDelete" does not exist.', 29, $this->source); })()))))) {
            // line 30
            yield "    ";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticForm/Builder/_actions.html.twig", 30)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.form.builder.formfield.remove_row", "variant" => "ghost", "danger" => "true", "icon_only" => "true", "size" => "sm", "icon" => "ri-delete-bin-line text-danger", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 39
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 39, $this->source); })()), ["objectAction" => "delete", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 39, $this->source); })()), "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 39, $this->source); })())]), "attributes" => ["data-hide-panel" => "true", "data-toggle" => "ajax", "data-ignore-formexit" => "true", "data-method" => "POST", "data-hide-loadingbar" => "true"]]]]));
            // line 50
            yield "  ";
        }
        // line 51
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Builder/_actions.html.twig";
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
        return array (  63 => 51,  60 => 50,  58 => 39,  56 => 30,  54 => 29,  51 => 28,  49 => 19,  48 => 11,  44 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Builder/_actions.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Builder/_actions.html.twig");
    }
}
