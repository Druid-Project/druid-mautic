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

/* @MauticLead/Company/list_rows_contacts.html.twig */
class __TwigTemplate_97b078af3210bb0169e47450717a6785 extends Template
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
        // line 12
        $context["baseUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_contacts_list", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]);
        // line 13
        $context["customButtons"] = [];
        // line 14
        yield "
";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 15) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "load:leads:editother", [], "array", false, false, false, 15))) {
            // line 16
            yield "    ";
            $context["customButtons"] = [["attr" => ["class" => "btn btn-ghost btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_batch_contact_view"), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.lists")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.lists"), "iconClass" => "fa ri-pie-chart-line"], ["attr" => ["class" => "btn btn-ghost btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchStages"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.stages")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.stages"), "iconClass" => "ri-speed-up-line"], ["attr" => ["class" => "btn btn-ghost btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchCampaigns"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.campaigns")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.campaigns"), "iconClass" => "ri-time-line"], ["attr" => ["class" => "btn btn-ghost btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchOwners"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.owner")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.owner"), "iconClass" => "ri-user-6-line"], ["attr" => ["class" => "btn btn-ghost btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchDnc"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.dnc")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.dnc"), "iconClass" => "ri-prohibited-line text-danger"]];
        }
        // line 74
        yield "
";
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 75, $this->source); })())) > 0)) {
            // line 76
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"leadTable\">
            <thead>
                <tr>
                    ";
            // line 80
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#contacts-table", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 84
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 84) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 84))], "customButtons" =>             // line 86
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 86, $this->source); })()), "langVar" => "lead.lead", "routeBase" => "contact", "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.checkall.help")]);
            // line 90
            yield "
                    ";
            // line 91
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . CoreExtension::getAttribute($this->env, $this->source,             // line 92
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)) . ".contacts"), "orderBy" => "l.lastname, l.firstname, l.company, l.email", "text" => "mautic.core.name", "class" => "col-lead-name", "target" => "#contacts-table", "baseUrl" =>             // line 97
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 97, $this->source); })())]);
            // line 98
            yield "
                    ";
            // line 99
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . CoreExtension::getAttribute($this->env, $this->source,             // line 100
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)) . ".contacts"), "orderBy" => "l.email", "text" => "mautic.core.type.email", "class" => "col-lead-email visible-md visible-lg", "target" => "#contacts-table", "baseUrl" =>             // line 105
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 105, $this->source); })())]);
            // line 106
            yield "
                    ";
            // line 107
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . CoreExtension::getAttribute($this->env, $this->source,             // line 108
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)) . ".contacts"), "orderBy" => "l.city, l.state", "text" => "mautic.lead.lead.thead.location", "class" => "col-lead-location visible-md visible-lg", "target" => "#contacts-table", "baseUrl" =>             // line 113
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 113, $this->source); })())]);
            // line 114
            yield "
                    ";
            // line 115
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . CoreExtension::getAttribute($this->env, $this->source,             // line 116
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)) . ".contacts"), "orderBy" => "l.stage_id", "text" => "mautic.lead.stage.label", "class" => "col-lead-stage", "target" => "#contacts-table", "baseUrl" =>             // line 121
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 121, $this->source); })())]);
            // line 122
            yield "
                    ";
            // line 123
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . CoreExtension::getAttribute($this->env, $this->source,             // line 124
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124)) . ".contacts"), "orderBy" => "l.points", "text" => "mautic.lead.points", "class" => "visible-md visible-lg col-lead-points", "target" => "#contacts-table", "baseUrl" =>             // line 129
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 129, $this->source); })())]);
            // line 130
            yield "
                    ";
            // line 131
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . CoreExtension::getAttribute($this->env, $this->source,             // line 132
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)) . ".contacts"), "orderBy" => "l.last_active", "text" => "mautic.lead.lastactive", "class" => "col-lead-lastactive visible-md visible-lg", "default" => true, "target" => "#contacts-table", "baseUrl" =>             // line 138
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 138, $this->source); })())]);
            // line 139
            yield "
                    ";
            // line 140
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . CoreExtension::getAttribute($this->env, $this->source,             // line 141
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)) . ".contacts"), "orderBy" => "l.id", "text" => "mautic.core.id", "class" => "col-lead-id visible-md visible-lg", "target" => "#contacts-table", "baseUrl" =>             // line 146
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 146, $this->source); })())]);
            // line 147
            yield "
                </tr>
            </thead>
            <tbody>
            ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 151, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 152
                yield "                ";
                $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fields", [], "any", false, false, false, 152);
                // line 153
                yield "                <tr>
                    <td>
                        ";
                // line 155
                $context["hasEditAccess"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 155, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 155), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 155, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 155), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "permissionUser", [], "method", false, false, false, 155));
                // line 156
                yield "                        ";
                $context["custom"] = [];
                // line 157
                yield "                        ";
                if (((isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 157, $this->source); })()) && array_key_exists("currentList", $context))) {
                    // line 158
                    yield "                            ";
                    // line 159
                    yield "                            ";
                    $context["custom"] = Twig\Extension\CoreExtension::merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 159, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "removeLead", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 161
(isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161), "leadId" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 161)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.lead.lead.remove.fromlist", "iconClass" => "ri-close-line"]]);
                    // line 168
                    yield "                        ";
                }
                // line 169
                yield "
                        ";
                // line 170
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 170), "email", [], "any", true, true, false, 170)) {
                    // line 171
                    yield "                            ";
                    $context["custom"] = Twig\Extension\CoreExtension::merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 171, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 175
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 175, $this->source); })()), "core", [], "any", false, false, false, 175), "email", [], "any", false, false, false, 175), "value", [], "any", false, false, false, 175)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 176
$context["contact"], "id", [], "any", false, false, false, 176), "objectAction" => "email", "list" => 1])], "btnText" => "mautic.lead.email.send_email", "iconClass" => "ri-send-plane-line"]]);
                    // line 181
                    yield "                        ";
                }
                // line 182
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 183
$context["contact"], "templateButtons" => ["edit" =>                 // line 185
(isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 185, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 186
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 186, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 186), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 186, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 186), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "permissionUser", [], "any", false, false, false, 186))], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>                 // line 190
(isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 190, $this->source); })())]);
                // line 191
                yield "
                    </td>
                    <td>
                        <a href=\"";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 194)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            <div>";
                // line 195
                if (CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "isAnonymous", [], "any", false, false, false, 195)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "primaryIdentifier", [], "any", false, false, false, 195)), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "primaryIdentifier", [], "any", false, false, false, 195));
                }
                yield "</div>
                            <div class=\"small\">";
                // line 196
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "secondaryIdentifier", [], "any", false, false, false, 196));
                yield "</div>
                        </a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 199
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 199, $this->source); })()), "core", [], "any", false, false, false, 199), "email", [], "any", false, false, false, 199), "value", [], "any", false, false, false, 199));
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 201
                $context["flag"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 201), "country", [], "any", true, true, false, 201) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 201, $this->source); })()), "core", [], "any", false, false, false, 201), "country", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 201, $this->source); })()), "core", [], "any", false, false, false, 201), "country", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201))) : (""));
                // line 202
                yield "                        ";
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 202, $this->source); })()))) {
                    // line 203
                    yield "                          <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 203, $this->source); })()), "html", null, true);
                    yield "\" style=\"max-height: 24px;\" class=\"mr-sm\" />
                        ";
                }
                // line 205
                yield "                        ";
                $context["location"] = [];
                // line 206
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 206), "city", [], "any", true, true, false, 206)) {
                    // line 207
                    yield "                            ";
                    $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 207, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 207, $this->source); })()), "core", [], "any", false, false, false, 207), "city", [], "any", false, false, false, 207), "value", [], "any", false, false, false, 207)]);
                    // line 208
                    yield "                        ";
                }
                // line 209
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 209), "state", [], "any", true, true, false, 209)) {
                    // line 210
                    yield "                            ";
                    $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 210, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 210, $this->source); })()), "core", [], "any", false, false, false, 210), "state", [], "any", false, false, false, 210), "value", [], "any", false, false, false, 210)]);
                    // line 211
                    yield "                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 211), "country", [], "any", true, true, false, 211)) {
                    // line 212
                    yield "                            ";
                    $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 212, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 212, $this->source); })()), "core", [], "any", false, false, false, 212), "country", [], "any", false, false, false, 212), "value", [], "any", false, false, false, 212)]);
                    // line 213
                    yield "                        ";
                }
                // line 214
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 214, $this->source); })()), ", "), "html", null, true);
                yield "
                        <div class=\"clearfix\"></div>
                    </td>
                    <td class=\"text-center\">
                        ";
                // line 218
                if (CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "stage", [], "any", false, false, false, 218)) {
                    // line 219
                    yield "                          <span size=\"sm\" class=\"label label-gray\" style=\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "color", [], "any", false, false, false, 219)) {
                        yield "background-color:";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "color", [], "any", false, false, false, 219), "html", null, true);
                        yield ";";
                    }
                    yield "\">";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "stage", [], "any", false, false, false, 219), "name", [], "any", false, false, false, 219));
                    yield "</span>
                        ";
                }
                // line 221
                yield "                    </td>
                    <td class=\"visible-md visible-lg text-center\">
                        <span size=\"sm\" class=\"label label-gray\" style=\"";
                // line 223
                if (CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "color", [], "any", false, false, false, 223)) {
                    yield "background-color:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "color", [], "any", false, false, false, 223), "html", null, true);
                    yield ";";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "points", [], "any", false, false, false, 223), "html", null, true);
                yield "</span>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        <abbr title=\"";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lastActive", [], "any", false, false, false, 226)));
                yield "\">
                            ";
                // line 227
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lastActive", [], "any", false, false, false, 227));
                yield "
                        </abbr>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 230), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            yield "            </tbody>
        </table>
    </div>
    ";
            // line 236
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" =>             // line 237
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 237, $this->source); })()), "limit" =>             // line 238
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 238, $this->source); })()), "baseUrl" =>             // line 239
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 239, $this->source); })()), "target" => "#contacts-table", "totalItems" =>             // line 241
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 241, $this->source); })()), "sessionVar" => (("company." . CoreExtension::getAttribute($this->env, $this->source,             // line 242
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 242, $this->source); })()), "id", [], "any", false, false, false, 242)) . ".contacts")]);
            // line 243
            yield "
";
        } else {
            // line 245
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
        return "@MauticLead/Company/list_rows_contacts.html.twig";
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
        return array (  333 => 245,  329 => 243,  327 => 242,  326 => 241,  325 => 239,  324 => 238,  323 => 237,  322 => 236,  317 => 233,  300 => 230,  294 => 227,  290 => 226,  278 => 223,  274 => 221,  262 => 219,  260 => 218,  252 => 214,  249 => 213,  246 => 212,  243 => 211,  240 => 210,  237 => 209,  234 => 208,  231 => 207,  228 => 206,  225 => 205,  219 => 203,  216 => 202,  214 => 201,  209 => 199,  203 => 196,  195 => 195,  191 => 194,  186 => 191,  184 => 190,  183 => 186,  182 => 185,  181 => 183,  179 => 182,  176 => 181,  174 => 176,  173 => 175,  171 => 171,  169 => 170,  166 => 169,  163 => 168,  161 => 161,  159 => 159,  157 => 158,  154 => 157,  151 => 156,  149 => 155,  145 => 153,  142 => 152,  125 => 151,  119 => 147,  117 => 146,  116 => 141,  115 => 140,  112 => 139,  110 => 138,  109 => 132,  108 => 131,  105 => 130,  103 => 129,  102 => 124,  101 => 123,  98 => 122,  96 => 121,  95 => 116,  94 => 115,  91 => 114,  89 => 113,  88 => 108,  87 => 107,  84 => 106,  82 => 105,  81 => 100,  80 => 99,  77 => 98,  75 => 97,  74 => 92,  73 => 91,  70 => 90,  68 => 86,  67 => 84,  66 => 80,  60 => 76,  58 => 75,  55 => 74,  51 => 16,  49 => 15,  46 => 14,  44 => 13,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Company/list_rows_contacts.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Company/list_rows_contacts.html.twig");
    }
}
