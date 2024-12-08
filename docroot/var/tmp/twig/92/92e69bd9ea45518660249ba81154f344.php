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

/* @MauticLead/Lead/list_rows.html.twig */
class __TwigTemplate_63903a20b0f9afd9621e56fc3820966b extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            yield "    ";
            $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fields", [], "any", false, false, false, 2);
            // line 3
            yield "    <tr class=\"";
            if (array_key_exists("highlight", $context)) {
                yield "warning";
            }
            yield "\">
        <td>
            ";
            // line 5
            $context["hasEditAccess"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 5, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 5, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "permissionUser", [], "any", false, false, false, 5));
            // line 6
            yield "            ";
            $context["custom"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 8
$context["item"], "id", [], "any", false, false, false, 8)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.core.details", "iconClass" => "ri-information-2-line"]];
            // line 15
            yield "
            ";
            // line 16
            if (((isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 16, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 16, $this->source); })())))) {
                // line 17
                yield "                ";
                // line 18
                yield "                ";
                $context["custom"] = Twig\Extension\CoreExtension::merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 18, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "removeLead", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 20
(isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "leadId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.lead.lead.remove.fromlist", "iconClass" => "ri-close-line"]]);
                // line 27
                yield "            ";
            }
            // line 28
            yield "
            ";
            // line 29
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 29, $this->source); })()), "core", [], "array", false, false, false, 29), "email", [], "array", false, false, false, 29), "value", [], "array", false, false, false, 29))) {
                // line 30
                yield "                ";
                $context["custom"] = Twig\Extension\CoreExtension::merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 30, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 34
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 34, $this->source); })()), "core", [], "array", false, false, false, 34), "email", [], "array", false, false, false, 34), "value", [], "array", false, false, false, 34)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 35
$context["item"], "id", [], "any", false, false, false, 35), "objectAction" => "email", "list" => 1])], "btnText" => "mautic.lead.email.send_email", "iconClass" => "ri-send-plane-line"]]);
                // line 40
                yield "            ";
            }
            // line 41
            yield "
            ";
            // line 42
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 43
$context["item"], "templateButtons" => ["edit" =>             // line 45
(isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 45, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 46
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "permissionUser", [], "any", false, false, false, 46))], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>             // line 50
(isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 50, $this->source); })())]);
            // line 51
            yield "
        </td>
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 53, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["column"] => $context["label"]) {
                // line 54
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, [(("@MauticLead/Lead/_list_column_" . $context["column"]) . ".html.twig"), "@MauticLead/Lead/_list_column_default.html.twig"], ["item" =>                 // line 55
$context["item"], "fields" =>                 // line 56
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 56, $this->source); })()), "label" =>                 // line 57
$context["label"], "column" =>                 // line 58
$context["column"], "columns" =>                 // line 59
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 59, $this->source); })()), "noContactList" =>                 // line 60
(isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 60, $this->source); })()), "class" => ((CoreExtension::inFilter(                // line 61
$context["column"], Twig\Extension\CoreExtension::keys((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 61, $this->source); })())))) ? ("hidden-xs") : (""))]);
                // line 62
                yield "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['column'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "    </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/list_rows.html.twig";
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
        return array (  158 => 64,  143 => 62,  141 => 61,  140 => 60,  139 => 59,  138 => 58,  137 => 57,  136 => 56,  135 => 55,  133 => 54,  116 => 53,  112 => 51,  110 => 50,  109 => 46,  108 => 45,  107 => 43,  106 => 42,  103 => 41,  100 => 40,  98 => 35,  97 => 34,  95 => 30,  93 => 29,  90 => 28,  87 => 27,  85 => 20,  83 => 18,  81 => 17,  79 => 16,  76 => 15,  74 => 8,  72 => 6,  70 => 5,  62 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/list_rows.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/list_rows.html.twig");
    }
}
