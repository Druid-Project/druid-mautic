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

/* @MauticLead/List/_list_row.html.twig */
class __TwigTemplate_12ab3aafb0ad52223ca8bcc8ef9a8d02 extends Template
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
        $context["now"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\DateTimeExtension']->getUtcDateTime();
        // line 6
        $context["hoursSinceLastBuilt"] = null;
        // line 7
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "lastBuiltDate", [], "any", false, false, false, 7))) {
            // line 8
            yield "    ";
            $context["lastBuiltDate"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "lastBuiltDate", [], "any", false, false, false, 8), "timestamp", [], "any", false, false, false, 8));
            // line 9
            yield "    ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
            // line 10
            yield "    ";
            $context["diffInSeconds"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 10, $this->source); })()), "timestamp", [], "any", false, false, false, 10) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastBuiltDate"]) || array_key_exists("lastBuiltDate", $context) ? $context["lastBuiltDate"] : (function () { throw new RuntimeError('Variable "lastBuiltDate" does not exist.', 10, $this->source); })()), "timestamp", [], "any", false, false, false, 10));
            // line 11
            yield "    ";
            $context["hoursSinceLastBuilt"] = ((isset($context["diffInSeconds"]) || array_key_exists("diffInSeconds", $context) ? $context["diffInSeconds"] : (function () { throw new RuntimeError('Variable "diffInSeconds" does not exist.', 11, $this->source); })()) / Twig\Extension\CoreExtension::round(3600));
        }
        // line 13
        $context["mauticTemplateVars"] = Twig\Extension\CoreExtension::merge($context, [["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })())]]);
        // line 14
        yield "<tr>
    <td>
        ";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>         // line 17
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OWN"), [], "array", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OTHER"), [], "array", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "createdBy", [], "any", false, false, false, 19)), "clone" => (CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_CREATE"), [], "array", false, false, false, 20) && $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OWN"), [], "array", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OTHER"), [], "array", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "createdBy", [], "any", false, false, false, 20))), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OWN"), [], "array", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OTHER"), [], "array", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "createdBy", [], "any", false, false, false, 21))], "routeBase" => "segment", "langVar" => "lead.list", "custom" => [["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => ((        // line 29
(isset($context["listCommand"]) || array_key_exists("listCommand", $context) ? $context["listCommand"] : (function () { throw new RuntimeError('Variable "listCommand" does not exist.', 29, $this->source); })()) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "alias", [], "any", false, false, false, 29))])], "icon" => "ri-team-line", "label" => "mautic.lead.list.view_contacts"]]]);
        // line 35
        yield "
    </td>
    <td>
        <div>
            ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "model" => "lead.list"]);
        yield "
            ";
        // line 40
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(true, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), "lead:lists:editother", [], "array", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "createdBy", [], "any", false, false, false, 40))) {
            // line 41
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
                  ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "alias", [], "any", false, false, false, 42), "html", null, true);
            yield ")
                </a>
            ";
        } else {
            // line 45
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "alias", [], "any", false, false, false, 45), "html", null, true);
            yield ")
            ";
        }
        // line 47
        yield "            ";
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "isGlobal", [], "any", false, false, false, 47) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "createdBy", [], "any", false, false, false, 47)))) {
            // line 48
            yield "                <br/>
                <span class=\"small\">(";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "createdByUser", [], "any", false, false, false, 49), "html", null, true);
            yield ")</span>
            ";
        }
        // line 51
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "isGlobal", [], "any", false, false, false, 51)) {
            yield "<i title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.form.isglobal"), "html", null, true);
            yield "\" class=\"ri-group-2-fill fs-14\"></i>";
        }
        // line 52
        yield "            ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "getFilters", [], "method", false, false, false, 52))) {
            yield "<i title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
            yield "\" class=\"ri-fw ri-filter-2-fill fs-14\"></i>";
        }
        // line 53
        yield "            ";
        if (((isset($context["hoursSinceLastBuilt"]) || array_key_exists("hoursSinceLastBuilt", $context) ? $context["hoursSinceLastBuilt"] : (function () { throw new RuntimeError('Variable "hoursSinceLastBuilt" does not exist.', 53, $this->source); })()) >= (isset($context["segmentRebuildWarningThreshold"]) || array_key_exists("segmentRebuildWarningThreshold", $context) ? $context["segmentRebuildWarningThreshold"] : (function () { throw new RuntimeError('Variable "segmentRebuildWarningThreshold" does not exist.', 53, $this->source); })()))) {
            // line 54
            yield "                <label class=\"control-label\" data-toggle=\"tooltip\"
                       data-container=\"body\" data-placement=\"top\" title=\"\"
                       data-original-title=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.form.config.segment_rebuild_time.message", ["%count%" => (isset($context["hoursSinceLastBuilt"]) || array_key_exists("hoursSinceLastBuilt", $context) ? $context["hoursSinceLastBuilt"] : (function () { throw new RuntimeError('Variable "hoursSinceLastBuilt" does not exist.', 56, $this->source); })())]), "html", null, true);
            yield "\">
                    <i class=\"text-danger ri-error-warning-line-circle fs-14\"></i></label>
            ";
        }
        // line 59
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 59) >= (isset($context["segmentBuildWarningThreshold"]) || array_key_exists("segmentBuildWarningThreshold", $context) ? $context["segmentBuildWarningThreshold"] : (function () { throw new RuntimeError('Variable "segmentBuildWarningThreshold" does not exist.', 59, $this->source); })()))) {
            // line 60
            yield "                <label class=\"control-label\" data-toggle=\"tooltip\"
                       data-container=\"body\" data-placement=\"top\" title=\"\"
                       data-original-title=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.form.config.segment_build_time.message", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\">
                    <i class=\"text-danger ri-time-line fs-14\"></i></label>
            ";
        }
        // line 65
        yield "            ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("segment.name", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 65, $this->source); })()));
        yield "
        </div>
        ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67)) {
            // line 68
            yield "            <div class=\"text-muted mt-4\">
                <small>";
            // line 69
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69));
            yield "</small>
            </div>
        ";
        }
        // line 72
        yield "    </td>
    <td class=\"visible-md visible-lg\">
        <a size=\"sm\" class=\"label label-gray col-count\"
           data-id=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75), "html", null, true);
        yield "\"
           href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.list") . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 76, $this->source); })()), "alias", [], "any", false, false, false, 76))]), "html", null, true);
        yield "\"
           data-toggle=\"ajax\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.viewleads_count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 77, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), [], "array", false, false, false, 77)]), "html", null, true);
        yield "</a>
    </td>
    <td class=\"visible-md visible-lg\" title=\"";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 79, $this->source); })()), "dateAdded", [], "any", false, false, false, 79)) {
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 79, $this->source); })()), "dateAdded", [], "any", false, false, false, 79));
        }
        yield "\">
        ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "getDateAdded", [], "any", false, false, false, 80)) {
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "dateAdded", [], "any", false, false, false, 80));
        }
        // line 81
        yield "    </td>
    <td class=\"visible-md visible-lg\" title=\"";
        // line 82
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "dateModified", [], "any", false, false, false, 82)) {
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "dateModified", [], "any", false, false, false, 82));
        }
        yield "\">
        ";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 83, $this->source); })()), "getDateModified", [], "any", false, false, false, 83)) {
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 83, $this->source); })()), "dateModified", [], "any", false, false, false, 83));
        }
        // line 84
        yield "    </td>
    <td class=\"visible-md visible-lg\">";
        // line 85
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "createdByUser", [], "any", false, false, false, 85));
        yield "</td>
    <td class=\"visible-md visible-lg\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86), "html", null, true);
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
        return "@MauticLead/List/_list_row.html.twig";
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
        return array (  223 => 86,  219 => 85,  216 => 84,  212 => 83,  206 => 82,  203 => 81,  199 => 80,  193 => 79,  188 => 77,  184 => 76,  180 => 75,  175 => 72,  169 => 69,  166 => 68,  164 => 67,  158 => 65,  152 => 62,  148 => 60,  145 => 59,  139 => 56,  135 => 54,  132 => 53,  125 => 52,  118 => 51,  113 => 49,  110 => 48,  107 => 47,  99 => 45,  91 => 42,  86 => 41,  84 => 40,  80 => 39,  74 => 35,  72 => 29,  71 => 21,  70 => 20,  69 => 19,  68 => 17,  67 => 16,  63 => 14,  61 => 13,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  46 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/List/_list_row.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/List/_list_row.html.twig");
    }
}
