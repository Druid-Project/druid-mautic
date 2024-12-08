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

/* @MauticLead/Lead/_list_row.html.twig */
class __TwigTemplate_d2684a710d876e3c66df486f9c68dae8 extends Template
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
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "fields", [], "any", false, false, false, 5);
        // line 6
        yield "<tr class=\"";
        if (array_key_exists("highlight", $context)) {
            yield "warning";
        }
        yield "\">
    <td>
        ";
        // line 8
        $context["hasEditAccess"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 8, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 8, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "permissionUser", [], "any", false, false, false, 8));
        // line 9
        yield "        ";
        $context["custom"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.core.details", "iconClass" => "ri-information-line"]];
        // line 18
        yield "
        ";
        // line 19
        if (((isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 19, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 19, $this->source); })())))) {
            // line 20
            yield "            ";
            // line 21
            yield "            ";
            $context["custom"] = Twig\Extension\CoreExtension::merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 21, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "removeLead", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 23
(isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.lead.lead.remove.fromlist", "iconClass" => "ri-close-line"]]);
            // line 30
            yield "        ";
        }
        // line 31
        yield "
        ";
        // line 32
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 32, $this->source); })()), "core", [], "array", false, false, false, 32), "email", [], "array", false, false, false, 32), "value", [], "array", false, false, false, 32))) {
            // line 33
            yield "            ";
            $context["custom"] = Twig\Extension\CoreExtension::merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 33, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 37
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 37, $this->source); })()), "core", [], "array", false, false, false, 37), "email", [], "array", false, false, false, 37), "value", [], "array", false, false, false, 37)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 38
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "objectAction" => "email", "list" => 1])], "btnText" => "mautic.lead.email.send_email", "iconClass" => "ri-mail-send-line"]]);
            // line 43
            yield "        ";
        }
        // line 44
        yield "
        ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>         // line 46
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "templateButtons" => ["edit" =>         // line 48
(isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 48, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 49), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 49), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "permissionUser", [], "any", false, false, false, 49))], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>         // line 53
(isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 53, $this->source); })())]);
        // line 54
        yield "
    </td>
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 56, $this->source); })()));
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
            // line 57
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, [(("@MauticLead/Lead/_list_column_" . $context["column"]) . ".html.twig"), "@MauticLead/Lead/_list_column_default.html.twig"], ["item" =>             // line 58
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "fields" =>             // line 59
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 59, $this->source); })()), "label" =>             // line 60
$context["label"], "column" =>             // line 61
$context["column"], "columns" =>             // line 62
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 62, $this->source); })()), "noContactList" =>             // line 63
(isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 63, $this->source); })()), "class" => ((CoreExtension::inFilter(            // line 64
$context["column"], Twig\Extension\CoreExtension::keys((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 64, $this->source); })())))) ? ("hidden-xs") : (""))]);
            // line 65
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
        // line 67
        yield "</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/_list_row.html.twig";
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
        return array (  140 => 67,  125 => 65,  123 => 64,  122 => 63,  121 => 62,  120 => 61,  119 => 60,  118 => 59,  117 => 58,  115 => 57,  98 => 56,  94 => 54,  92 => 53,  91 => 49,  90 => 48,  89 => 46,  88 => 45,  85 => 44,  82 => 43,  80 => 38,  79 => 37,  77 => 33,  75 => 32,  72 => 31,  69 => 30,  67 => 23,  65 => 21,  63 => 20,  61 => 19,  58 => 18,  56 => 11,  54 => 9,  52 => 8,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_list_row.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/_list_row.html.twig");
    }
}
