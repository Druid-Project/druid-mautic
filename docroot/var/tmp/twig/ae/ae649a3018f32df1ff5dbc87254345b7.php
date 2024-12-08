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

/* @MauticEmail/Email/_list.html.twig */
class __TwigTemplate_dc7886a3cbc1cc650a427dea3e3535eb extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover email-list\">
            <thead>
            <tr>";
            // line 6
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "routeBase" => "email", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 10) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 10))], "customButtons" => [["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_batch_categories_view"), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.batch.categories")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.batch.categories"), "iconClass" => "ri-folder-line"]], "langVar" => "lead.lead", "routeBase" => "contact", "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.checkall.help")]);
            // line 30
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-email-name"]);
            // line 37
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-email-category"]);
            // line 44
            yield "<th class=\"visible-sm visible-md visible-lg col-email-stats\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
            yield "</th>";
            // line 46
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-lg col-email-dateAdded"]);
            // line 53
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.dateModified", "defaultDir" => "DESC", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-lg col-email-dateModified", "default" => true]);
            // line 62
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-lg col-email-createdByUser"]);
            // line 69
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-email-id"]);
            // line 75
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 78, $this->source); })()));
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
                // line 79
                yield "                ";
                $context["hasVariants"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVariant", [], "method", false, false, false, 79);
                // line 80
                yield "                ";
                $context["hasTranslations"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isTranslation", [], "method", false, false, false, 80);
                // line 81
                yield "                ";
                $context["type"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmailType", [], "method", false, false, false, 81);
                // line 82
                yield "                ";
                $context["hasDraft"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hasDraft", [], "method", false, false, false, 82);
                // line 83
                yield "                ";
                $context["mauticTemplateVars"] = Twig\Extension\CoreExtension::merge($context, ["item" => $context["item"]]);
                // line 84
                yield "                <tr id=\"row_email_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 84), "html", null, true);
                yield "\">
                    <td>
                        ";
                // line 86
                $context["edit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 87
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 87, $this->source); })()), "email:emails:editown", [], "array", false, false, false, 87), CoreExtension::getAttribute($this->env, $this->source,                 // line 88
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 88, $this->source); })()), "email:emails:editother", [], "array", false, false, false, 88), CoreExtension::getAttribute($this->env, $this->source,                 // line 89
$context["item"], "getCreatedBy", [], "method", false, false, false, 89));
                // line 91
                yield "
                        ";
                // line 92
                $context["sendButton"] = ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 95
$context["item"], "getId", [], "method", false, false, false, 95)])], "iconClass" => "ri-send-plane-line-o", "btnText" => "mautic.email.send"];
                // line 100
                yield "
                        ";
                // line 101
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isBackgroundSending", [], "method", false, false, false, 101)) {
                    // line 102
                    yield "                            ";
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 102, $this->source); })()), ["attr" => ["href" => "javascript:void(0);", "disabled" => true], "tooltip" => "mautic.email.send.disabled", "btnClass" => "disabled"]);
                    // line 110
                    yield "                        ";
                }
                // line 111
                yield "
                        ";
                // line 112
                $context["customButtons"] = ((("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 112, $this->source); })()))) ? ([(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 112, $this->source); })())]) : ([]));
                // line 115
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 116
$context["item"], "templateButtons" => ["edit" =>                 // line 118
(isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 118, $this->source); })()), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 119
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 119, $this->source); })()), "email:emails:create", [], "array", false, false, false, 119), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 121
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 121, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 121), CoreExtension::getAttribute($this->env, $this->source,                 // line 122
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 122, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source,                 // line 123
$context["item"], "getCreatedBy", [], "method", false, false, false, 123)), "abtest" => (( !                // line 125
(isset($context["hasVariants"]) || array_key_exists("hasVariants", $context) ? $context["hasVariants"] : (function () { throw new RuntimeError('Variable "hasVariants" does not exist.', 125, $this->source); })()) && (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 125, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 125, $this->source); })()), "email:emails:create", [], "array", false, false, false, 125))], "routeBase" => "email", "customButtons" =>                 // line 128
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 128, $this->source); })())]);
                // line 130
                yield "</td>
                    <td>
                        <div>";
                // line 133
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 134
$context["item"], "model" => "email"]);
                // line 137
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 137)]), "html", null, true);
                yield "\"
                               data-toggle=\"ajax\">
                                ";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 139), "html", null, true);
                yield "
                                ";
                // line 140
                if ((isset($context["hasVariants"]) || array_key_exists("hasVariants", $context) ? $context["hasVariants"] : (function () { throw new RuntimeError('Variable "hasVariants" does not exist.', 140, $this->source); })())) {
                    // line 141
                    yield "                                  <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                    yield "\"><i class=\"ri-fw ri-organization-chart fs-14\"></i></span>
                                ";
                }
                // line 143
                yield "                                ";
                if ((isset($context["hasTranslations"]) || array_key_exists("hasTranslations", $context) ? $context["hasTranslations"] : (function () { throw new RuntimeError('Variable "hasTranslations" does not exist.', 143, $this->source); })())) {
                    // line 144
                    yield "                                  <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                    yield "\"><i class=\"ri-fw ri-translate fs-14\"></i></span>
                                ";
                }
                // line 146
                yield "                                ";
                if (("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 146, $this->source); })()))) {
                    // line 147
                    yield "                                  <span data-toggle=\"tooltip\"title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.icon_tooltip.list_email"), "html", null, true);
                    yield "\"><i class=\"ri-pie-chart-line fs-14\"></i></span>
                                ";
                }
                // line 149
                yield "                                ";
                if (((isset($context["isDraftEnabled"]) || array_key_exists("isDraftEnabled", $context) ? $context["isDraftEnabled"] : (function () { throw new RuntimeError('Variable "isDraftEnabled" does not exist.', 149, $this->source); })()) && (isset($context["hasDraft"]) || array_key_exists("hasDraft", $context) ? $context["hasDraft"] : (function () { throw new RuntimeError('Variable "hasDraft" does not exist.', 149, $this->source); })()))) {
                    // line 150
                    yield "                                <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.icon_tooltip.has_draft"), "html", null, true);
                    yield "\">
                                    <i class=\"fa fa-fw fa-file\"></i>
                                </span>
                                ";
                }
                // line 154
                yield "                                ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.name", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 154, $this->source); })()));
                yield "
                            </a>
                        </div>
                        ";
                // line 157
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 157))) {
                    // line 158
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 159
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 159));
                    yield "</small>
                            </div>
                        ";
                }
                // line 162
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 164
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 164);
                // line 165
                yield "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 165, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 165, $this->source); })()), "getTitle", [], "method", false, false, false, 165)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 166
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 166, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 166, $this->source); })()), "getColor", [], "method", false, false, false, 166))) : (""));
                // line 167
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 167, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 167, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-sm visible-md visible-lg col-stats\" data-stats=\"";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 169), "html", null, true);
                yield "\">
                        ";
                // line 170
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats.above", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 170, $this->source); })()));
                yield "
                        <span class=\"mt-xs label label-warm-gray";
                // line 171
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPendingCount", [], "method", false, false, false, 171) > 0) && ("list" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmailType", [], "method", false, false, false, 171)))) ? ("") : (" hide"));
                yield "\"
                              id=\"pending-";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 172), "html", null, true);
                yield "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.leadcount.tooltip"), "html", null, true);
                yield "\">
                          <i class=\"ri-more-fill\"></i><a href=\"";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_pending") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 175))]), "html", null, true);
                yield "\">
                              ";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.leadcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPendingCount", [], "method", false, false, false, 176)]), "html", null, true);
                yield "
                          </a>
                        </span>
                        <span class=\"mt-xs label label-magenta";
                // line 179
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getQueuedCount", [], "method", false, false, false, 179) > 0)) ? ("") : (" hide"));
                yield "\"
                              id=\"queued-";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 180), "html", null, true);
                yield "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.queued.tooltip"), "html", null, true);
                yield "\">
                          <i class=\"ri-mail-send-line\"></i><a href=\"";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_queued") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 183))]), "html", null, true);
                yield "\">
                              ";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.queued", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getQueuedCount", [], "method", false, false, false, 184)]), "html", null, true);
                yield "
                          </a>
                        </span>
                        <span class=\"mt-xs label label-blue\" id=\"sent-count-";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 187), "html", null, true);
                yield "\">
                            <i class=\"ri-mail-unread-line\"></i><a href=\"";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_sent") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 188))]), "html", null, true);
                yield "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.sentcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSentCount", [true], "method", false, false, false, 190)]), "html", null, true);
                yield "</a>
                        </span>
                        <span class=\"mt-xs label label-teal\" id=\"read-count-";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 192), "html", null, true);
                yield "\">
                            <i class=\"ri-mail-open-line\"></i><a href=\"";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_read") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 193))]), "html", null, true);
                yield "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.readcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getReadCount", [true], "method", false, false, false, 195)]), "html", null, true);
                yield "</a>
                             <span id=\"read-percent-";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 196), "html", null, true);
                yield "\">
                                (";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getReadPercentage", [true], "method", false, false, false, 197), "html", null, true);
                yield "%)
                            </span>
                        </span>

                        ";
                // line 201
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 201, $this->source); })()));
                yield "
                        ";
                // line 202
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats.below", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 202, $this->source); })()));
                yield "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 204
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 204)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 204))) : (""));
                yield "\">
                        ";
                // line 205
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 205)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 205))) : (""));
                yield "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 207
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 207)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 207))) : (""));
                yield "\">
                        ";
                // line 208
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 208)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 208))) : (""));
                yield "
                    </td>
                    <td class=\"visible-lg\">";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 210));
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 211), "html", null, true);
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
            // line 214
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 218
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 219
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 219, $this->source); })()), "page" =>             // line 220
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 220, $this->source); })()), "limit" =>             // line 221
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 221, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_index"), "sessionVar" => "email"]);
            // line 225
            yield "</div>
";
        } else {
            // line 227
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/_list.html.twig";
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
        return array (  398 => 227,  394 => 225,  392 => 221,  391 => 220,  390 => 219,  389 => 218,  384 => 214,  367 => 211,  363 => 210,  358 => 208,  354 => 207,  349 => 205,  345 => 204,  340 => 202,  336 => 201,  329 => 197,  325 => 196,  319 => 195,  314 => 193,  310 => 192,  303 => 190,  298 => 188,  294 => 187,  288 => 184,  284 => 183,  280 => 182,  275 => 180,  271 => 179,  265 => 176,  261 => 175,  257 => 174,  252 => 172,  248 => 171,  244 => 170,  240 => 169,  232 => 167,  229 => 166,  226 => 165,  224 => 164,  220 => 162,  214 => 159,  211 => 158,  209 => 157,  202 => 154,  194 => 150,  191 => 149,  185 => 147,  182 => 146,  176 => 144,  173 => 143,  167 => 141,  165 => 140,  161 => 139,  155 => 137,  153 => 134,  152 => 133,  148 => 130,  146 => 128,  145 => 125,  144 => 123,  143 => 122,  142 => 121,  141 => 119,  140 => 118,  139 => 116,  138 => 115,  136 => 112,  133 => 111,  130 => 110,  127 => 102,  125 => 101,  122 => 100,  120 => 95,  119 => 92,  116 => 91,  114 => 89,  113 => 88,  112 => 87,  111 => 86,  105 => 84,  102 => 83,  99 => 82,  96 => 81,  93 => 80,  90 => 79,  73 => 78,  68 => 75,  66 => 69,  64 => 62,  62 => 53,  60 => 46,  56 => 44,  54 => 37,  52 => 30,  50 => 10,  49 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/_list.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Email/_list.html.twig");
    }
}
