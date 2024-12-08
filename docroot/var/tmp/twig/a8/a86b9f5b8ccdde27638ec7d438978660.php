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

/* @MauticLead/Import/_list_row.html.twig */
class __TwigTemplate_0acaed09b628f4702da342bf38211c1a extends Template
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
        // line 6
        $context["objectRoute"] = null;
        // line 7
        if (("lead" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "object", [], "any", false, false, false, 7))) {
            // line 8
            yield "  ";
            $context["objectRoute"] = "mautic_contact_index";
        }
        // line 10
        yield "<tr>
    <td class=\"col-actions text-center\">
        <span class=\"label label-";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "satusLabelClass", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
            ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.import.status." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "status", [], "any", false, false, false, 13))), "html", null, true);
        yield "
        </span>
    </td>
    <td>
        <div>
            ";
        // line 18
        if ((!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "status", [], "any", false, false, false, 18), [Twig\Extension\CoreExtension::constant("FAILED", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })())), Twig\Extension\CoreExtension::constant("IMPORTED", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })())), Twig\Extension\CoreExtension::constant("MANUAL", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()))]) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 18, $this->source); })()) . ":publish"), [], "array", false, false, false, 18))) {
            // line 19
            yield "              ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "model" => "lead.import"]);
            yield "
            ";
        }
        // line 21
        yield "            ";
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(true, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 21, $this->source); })()) . ":viewother"), [], "array", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "createdBy", [], "any", false, false, false, 21))) {
            // line 22
            yield "              <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 22, $this->source); })()), ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "object" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["object", "contacts"], "method", false, false, false, 22)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
                ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            yield "
              </a>
            ";
        } else {
            // line 26
            yield "              ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            yield "
            ";
        }
        // line 28
        yield "        </div>
    </td>
    <td class=\"visible-md visible-lg\">";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "runTime", [], "any", false, false, false, 30)) {
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->formatRange(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "runTime", [], "any", false, false, false, 30));
        }
        yield "</td>
    <td class=\"visible-md visible-lg\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "progressPercentage", [], "any", false, false, false, 31), "html", null, true);
        yield "%</td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 33
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "            <a size=\"sm\" class=\"mt-xs label label-gray\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 34, $this->source); })()), ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34))]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "lineCount", [], "any", false, false, false, 34), "html", null, true);
            yield "</a>
        ";
        } else {
            // line 36
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "lineCount", [], "any", false, false, false, 36), "html", null, true);
            yield "
        ";
        }
        // line 38
        yield "    </td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 40
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 40, $this->source); })()))) {
            // line 41
            yield "            <a size=\"sm\" class=\"mt-xs label label-gray\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 41, $this->source); })()), ["search" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_action")) . ":inserted")]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "insertedCount", [], "any", false, false, false, 41), "html", null, true);
            yield "</a>
        ";
        } else {
            // line 43
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "insertedCount", [], "any", false, false, false, 43), "html", null, true);
            yield "
        ";
        }
        // line 45
        yield "    </td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 47
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 47, $this->source); })()))) {
            // line 48
            yield "            <a size=\"sm\" class=\"mt-xs label label-gray\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 48, $this->source); })()), ["search" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_action")) . ":updated")]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "updatedCount", [], "any", false, false, false, 48), "html", null, true);
            yield "</a>
        ";
        } else {
            // line 50
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "updatedCount", [], "any", false, false, false, 50), "html", null, true);
            yield "
        ";
        }
        // line 52
        yield "    </td>
    <td class=\"visible-md visible-lg\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "ignoredCount", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
    <td class=\"visible-md visible-lg\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "createdByUser", [], "any", false, false, false, 54), "html", null, true);
        yield "</td>
    <td class=\"visible-md visible-lg\">
        <abbr title=\"";
        // line 56
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "dateAdded", [], "any", false, false, false, 56));
        yield "\">
            ";
        // line 57
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "dateAdded", [], "any", false, false, false, 57));
        yield "
        </abbr>
    </td>
    <td class=\"visible-md visible-lg\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Import/_list_row.html.twig";
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
        return array (  187 => 60,  181 => 57,  177 => 56,  172 => 54,  168 => 53,  165 => 52,  159 => 50,  151 => 48,  149 => 47,  145 => 45,  139 => 43,  131 => 41,  129 => 40,  125 => 38,  119 => 36,  111 => 34,  109 => 33,  104 => 31,  98 => 30,  94 => 28,  88 => 26,  82 => 23,  77 => 22,  74 => 21,  68 => 19,  66 => 18,  58 => 13,  54 => 12,  50 => 10,  46 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/_list_row.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Import/_list_row.html.twig");
    }
}
