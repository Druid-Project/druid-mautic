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

/* @MauticCampaign/Campaign/list.html.twig */
class __TwigTemplate_c3cc64140462badb6cdbf2e3b642aab3 extends Template
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

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCampaign/Campaign/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaigns"), "html", null, true);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 10, $this->source); })())) {
            // line 11
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 12
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 13
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 13, $this->source); })()), "action" =>             // line 14
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 14, $this->source); })()), "actionRoute" =>             // line 15
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 15, $this->source); })()), "indexRoute" =>             // line 16
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 16, $this->source); })()), "translationBase" =>             // line 17
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()), "preCustomButtons" => ((            // line 18
array_key_exists("toolBarButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["toolBarButtons"]) || array_key_exists("toolBarButtons", $context) ? $context["toolBarButtons"] : (function () { throw new RuntimeError('Variable "toolBarButtons" does not exist.', 18, $this->source); })()), null)) : (null)), "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 20
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 20, $this->source); })()) . ":delete"), [], "array", false, false, false, 20)], "filters" => ((            // line 22
array_key_exists("filters", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), [])) : ([])), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 25
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 25, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 25)], "routeBase" => "campaign", "langVar" => "campaign.campaigns"]), "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.active", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.inactive", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.isuncategorized", "label" => "mautic.core.form.uncategorized", "tooltip" => "mautic.core.searchcommand.isuncategorized.description", "icon" => "ri-folder-unknow-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 57
            yield "<div class=\"page-list\">";
            // line 58
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.above", $context);
        }
        // line 60
        yield "
  ";
        // line 61
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 61, $this->source); })())) > 0)) {
            // line 62
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover campaign-list\" id=\"campaignTable\">
          <thead>
            <tr>";
            // line 66
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#campaignTable", "routeBase" => "campaign", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 71
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 71) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 71))]]);
            // line 75
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.name", "text" => "mautic.core.name", "class" => "col-campaign-name"]);
            // line 82
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-campaign-category"]);
            // line 89
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-campaign-dateAdded"]);
            // line 96
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-campaign-dateModified", "default" => true]);
            // line 104
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-campaign-createdByUser"]);
            // line 111
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-campaign-id"]);
            // line 117
            yield "</tr>
          </thead>
          <tbody>
            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 120, $this->source); })()));
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
                // line 121
                yield "                <tr>
                    <td>";
                // line 123
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 124
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 127
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 127, $this->source); })()), "campaign:campaigns:editown", [], "array", false, false, false, 127), CoreExtension::getAttribute($this->env, $this->source,                 // line 128
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 128, $this->source); })()), "campaign:campaigns:editother", [], "array", false, false, false, 128), CoreExtension::getAttribute($this->env, $this->source,                 // line 129
$context["item"], "createdBy", [], "any", false, false, false, 129)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 131
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 131, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 131), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 133
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 133, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 133), CoreExtension::getAttribute($this->env, $this->source,                 // line 134
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 134, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 134), CoreExtension::getAttribute($this->env, $this->source,                 // line 135
$context["item"], "createdBy", [], "any", false, false, false, 135))], "routeBase" => "campaign"]);
                // line 140
                yield "</td>
                    <td>
                        <div>";
                // line 143
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 144
$context["item"], "model" => "campaign", "onclick" => CoreExtension::getAttribute($this->env, $this->source,                 // line 146
$context["item"], "onclickMethod", [], "any", false, false, false, 146), "attributes" => CoreExtension::getAttribute($this->env, $this->source,                 // line 147
$context["item"], "dataAttributes", [], "any", false, false, false, 147), "transKeys" => CoreExtension::getAttribute($this->env, $this->source,                 // line 148
$context["item"], "translationKeysDataAttributes", [], "any", false, false, false, 148)]);
                // line 150
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 151), "html", null, true);
                // line 152
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("campaign.name", Twig\Extension\CoreExtension::merge($context, ["item" => $context["item"]]));
                // line 153
                yield "</a>
                        </div>";
                // line 155
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 155)) {
                    // line 156
                    yield "<div class=\"text-muted mt-4\"><small>";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 156));
                    yield "</small></div>";
                }
                // line 158
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 160
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 160);
                // line 161
                yield "                        ";
                [$context["catName"], $context["color"]] =                 [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 161, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 161, $this->source); })()), "title", [], "any", false, false, false, 161)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 161, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 161, $this->source); })()), "color", [], "any", false, false, false, 161))) : ("#"))];
                // line 162
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 162, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 162, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 164
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 164)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 164))) : (""));
                yield "\">
                        ";
                // line 165
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 165)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 165))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 167
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 167)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 167))) : (""));
                yield "\">
                        ";
                // line 168
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 168)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 168))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdByUser", [], "any", false, false, false, 170), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 171), "html", null, true);
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
            // line 174
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 178
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 179
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 179, $this->source); })())), "page" =>             // line 180
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 180, $this->source); })()), "limit" =>             // line 181
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 181, $this->source); })()), "menuLinkId" => "mautic_campaign_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_index"), "sessionVar" => "campaign"]);
            // line 186
            yield "</div>
  ";
        } else {
            // line 188
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.campaign.noresults.tip"]);
        }
        // line 190
        yield "
  ";
        // line 191
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 191, $this->source); })())) {
            // line 192
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.below", $context);
            // line 193
            yield "</div>
    </div>

    ";
            // line 196
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/protip.html.twig", ["tip" => Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.protip.campaigns.reengagement", "mautic.protip.campaigns.survey", "mautic.protip.campaigns.crosssell", "mautic.protip.campaigns.onboarding"])]);
            // line 198
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
        return "@MauticCampaign/Campaign/list.html.twig";
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
        return array (  270 => 198,  268 => 196,  263 => 193,  261 => 192,  259 => 191,  256 => 190,  253 => 188,  249 => 186,  247 => 181,  246 => 180,  245 => 179,  244 => 178,  239 => 174,  222 => 171,  218 => 170,  213 => 168,  209 => 167,  204 => 165,  200 => 164,  192 => 162,  189 => 161,  187 => 160,  183 => 158,  178 => 156,  176 => 155,  173 => 153,  171 => 152,  169 => 151,  165 => 150,  163 => 148,  162 => 147,  161 => 146,  160 => 144,  159 => 143,  155 => 140,  153 => 135,  152 => 134,  151 => 133,  150 => 131,  149 => 129,  148 => 128,  147 => 127,  146 => 124,  145 => 123,  142 => 121,  125 => 120,  120 => 117,  118 => 111,  116 => 104,  114 => 96,  112 => 89,  110 => 82,  108 => 75,  106 => 71,  105 => 66,  100 => 62,  98 => 61,  95 => 60,  92 => 58,  90 => 57,  88 => 25,  87 => 22,  86 => 20,  85 => 18,  84 => 17,  83 => 16,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  77 => 11,  74 => 10,  67 => 9,  56 => 6,  52 => 4,  50 => 2,  48 => 1,  41 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/list.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/list.html.twig");
    }
}
