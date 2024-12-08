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

/* @MauticReport/Report/_list.html.twig */
class __TwigTemplate_1cf6d6e2c9a9634981f4d61344997aee extends Template
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
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    <div class=\"table-responsive panel-collapse pull out page-list\">
        <table class=\"table table-hover report-list\" id=\"reportTable\">
            <thead>
            <tr>
                ";
            // line 6
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#reportTable", "langVar" => "report.report", "routeBase" => "report", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "report:reports:deleteown", [], "array", false, false, false, 12) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "report:reports:deleteother", [], "array", false, false, false, 12))]]);
            // line 14
            yield "

                ";
            // line 16
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.name", "text" => "mautic.core.name", "class" => "col-report-name"]);
            // line 21
            yield "

                ";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "text" => "mautic.report.report.form.source", "class" => "visible-lg col-email-source"]);
            // line 27
            yield "

                ";
            // line 29
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-lg col-report-dateAdded"]);
            // line 36
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.dateModified", "dir" => "DESC", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-lg col-report-dateModified", "default" => true]);
            // line 45
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-lg col-report-createdByUser"]);
            // line 50
            yield "

                ";
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.id", "text" => "mautic.core.id", "class" => "col-report-id visible-md visible-lg"]);
            // line 57
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 61, $this->source); })()));
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
                // line 62
                yield "                <tr>
                    <td>
                        ";
                // line 64
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isScheduled", [], "any", false, false, false, 64)) {
                    // line 65
                    yield "                          ";
                    $context["customButtons"] = [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#AssetPreviewModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_schedule", ["reportId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 70
$context["item"], "id", [], "any", false, false, false, 70)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.export.and.send"), "iconClass" => "ri-send-plane-line-o"]];
                    // line 76
                    yield "                        ";
                }
                // line 77
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 78
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 80
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 80, $this->source); })()), "report:reports:editown", [], "array", false, false, false, 80), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 80, $this->source); })()), "report:reports:editother", [], "array", false, false, false, 80), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 80)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 81
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 81, $this->source); })()), "report:reports:create", [], "array", false, false, false, 81), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 82
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 82, $this->source); })()), "report:reports:deleteown", [], "array", false, false, false, 82), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 82, $this->source); })()), "report:reports:deleteother", [], "array", false, false, false, 82), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 82))], "routeBase" => "report", "langVar" => "report.report", "customButtons" => ((                // line 86
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 86, $this->source); })()), [])) : ([]))]);
                // line 87
                yield "
                    </td>
                    <td>
                        <div>
                            ";
                // line 91
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "report.report"]);
                yield "
                            <a href=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_view", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                                ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 93));
                yield "
                            </a>
                            ";
                // line 95
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isScheduled", [], "any", false, false, false, 95)) {
                    // line 96
                    yield "                                <label class=\"control-label\" data-toggle=\"tooltip\"
                                       data-container=\"body\" data-placement=\"top\" title=\"\"
                                       data-original-title=\"";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.is.scheduled"), "html", null, true);
                    yield "\">
                                    <i class=\"ri-fw ri-send-plane-line-o\"></i></label>
                            ";
                }
                // line 101
                yield "                        </div>
                        ";
                // line 102
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 102)) {
                    // line 103
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 104
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 104));
                    yield "</small>
                            </div>
                        ";
                }
                // line 107
                yield "                    </td>

                    <td>";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "getTableData", [], "method", false, true, false, 109), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSource", [], "method", false, false, false, 109), [], "array", false, true, false, 109), "display_name", [], "array", true, true, false, 109) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "getTableData", [], "method", false, true, false, 109), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSource", [], "method", false, false, false, 109), [], "array", false, true, false, 109), "display_name", [], "array", false, false, false, 109)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "getTableData", [], "method", false, true, false, 109), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSource", [], "method", false, false, false, 109), [], "array", false, true, false, 109), "display_name", [], "array", false, false, false, 109)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSource", [], "method", false, false, false, 109)))), "html", null, true);
                yield "</td>

                    <td class=\"visible-lg\" title=\"";
                // line 111
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 111)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 111))) : (""));
                yield "\">
                        ";
                // line 112
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 112)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 112))) : (""));
                yield "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 114
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 114)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 114))) : (""));
                yield "\">
                        ";
                // line 115
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 115)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 115))) : (""));
                yield "
                    </td>
                    <td class=\"visible-lg\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 117));
                yield "</td>

                    <td class=\"visible-md visible-lg\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 119), "html", null, true);
                yield "</td>
                </tr>
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
            // line 122
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 125
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 126
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 126, $this->source); })()), "page" =>             // line 127
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 127, $this->source); })()), "limit" =>             // line 128
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 128, $this->source); })()), "menuLinkId" => "mautic_report_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_index"), "sessionVar" => "report"]);
            // line 132
            yield "
        </div>
    </div>
";
        } else {
            // line 136
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Report/_list.html.twig";
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
        return array (  235 => 136,  229 => 132,  227 => 128,  226 => 127,  225 => 126,  224 => 125,  219 => 122,  202 => 119,  197 => 117,  192 => 115,  188 => 114,  183 => 112,  179 => 111,  174 => 109,  170 => 107,  164 => 104,  161 => 103,  159 => 102,  156 => 101,  150 => 98,  146 => 96,  144 => 95,  139 => 93,  135 => 92,  131 => 91,  125 => 87,  123 => 86,  122 => 82,  121 => 81,  120 => 80,  119 => 78,  117 => 77,  114 => 76,  112 => 70,  110 => 65,  108 => 64,  104 => 62,  87 => 61,  81 => 57,  79 => 52,  75 => 50,  73 => 45,  71 => 36,  69 => 29,  65 => 27,  63 => 23,  59 => 21,  57 => 16,  53 => 14,  51 => 12,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/_list.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/Report/_list.html.twig");
    }
}
