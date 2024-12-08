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

/* @MauticSms/Sms/list.html.twig */
class __TwigTemplate_7d3520c3e5463790e203846362984b68 extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticSms/Sms/list.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "sms";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.smses"), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 7, $this->source); })())) {
            // line 8
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 9
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 10
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 10, $this->source); })()), "searchId" => "sms-search", "action" =>             // line 12
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 12, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 15)], "routeBase" => "sms"]), "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.available", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.unavailable", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.isuncategorized", "label" => "mautic.core.form.uncategorized", "tooltip" => "mautic.core.searchcommand.isuncategorized.description", "icon" => "ri-folder-unknow-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 47
            yield "<div class=\"page-list\">
            ";
            // line 48
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
        </div>
    </div>

    ";
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/protip.html.twig", ["tip" => Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.protip.sms.concise", "mautic.protip.sms.timesensitive", "mautic.protip.sms.compliance"])]);
            // line 54
            yield "
    ";
        } else {
            // line 56
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 61, $this->source); })()))) {
            // line 62
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover sms-list\">
            <thead>
            <tr>";
            // line 66
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "routeBase" => "sms", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 72
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 72, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 72) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 72, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 72))]]);
            // line 77
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-sms-name", "default" => true]);
            // line 88
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-sms-category"]);
            // line 98
            yield "<th class=\"visible-sm visible-md visible-lg col-sms-stats\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
            yield "</th>";
            // line 100
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-sms-id"]);
            // line 109
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 113
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 113, $this->source); })()));
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
                // line 114
                yield "                ";
                $context["type"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSmsType", [], "method", false, false, false, 114);
                // line 115
                yield "                <tr>
                    <td>
                        ";
                // line 117
                $context["edit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 118
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 118, $this->source); })()), "sms:smses:editown", [], "array", false, false, false, 118), CoreExtension::getAttribute($this->env, $this->source,                 // line 119
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 119, $this->source); })()), "sms:smses:editother", [], "array", false, false, false, 119), CoreExtension::getAttribute($this->env, $this->source,                 // line 120
$context["item"], "getCreatedBy", [], "method", false, false, false, 120));
                // line 122
                yield "                        ";
                $context["customButtons"] = [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.smses.header.preview"), "data-footer" => "false", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 129
$context["item"], "getId", [], "method", false, false, false, 129), "objectAction" => "preview"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.preview"), "iconClass" => "ri-share-forward-box-fill"]];
                // line 135
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 138
$context["item"], "templateButtons" => ["edit" =>                 // line 140
(isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 140, $this->source); })()), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 141
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 141, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 141), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 143
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 143, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 143), CoreExtension::getAttribute($this->env, $this->source,                 // line 144
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 144, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 144), CoreExtension::getAttribute($this->env, $this->source,                 // line 145
$context["item"], "getCreatedBy", [], "method", false, false, false, 145))], "routeBase" => "sms", "customButtons" =>                 // line 149
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 149, $this->source); })())]);
                // line 152
                yield "</td>
                    <td>
                        <div>";
                // line 155
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 157
$context["item"], "model" => "sms"]);
                // line 161
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 161)]), "html", null, true);
                yield "\">
                                ";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 162), "html", null, true);
                yield "
                                ";
                // line 163
                if (("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 163, $this->source); })()))) {
                    // line 164
                    yield "                                    <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.icon_tooltip.list_sms"), "html", null, true);
                    yield "\">
                                        <i class=\"ri-pie-chart-line fs-14\"></i>
                                    </span>
                                ";
                }
                // line 168
                yield "                            </a>
                        </div>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 172
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 172);
                // line 173
                yield "                        ";
                $context["catName"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 173, $this->source); })()))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 173, $this->source); })()), "getTitle", [], "method", false, false, false, 173)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 174
                yield "                        ";
                $context["color"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 174, $this->source); })()))) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 174, $this->source); })()), "getColor", [], "method", false, false, false, 174))) : (""));
                // line 175
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 175, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 175, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>";
                // line 177
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSms/Sms/list_stats.html.twig", ["item" => $context["item"]]);
                // line 178
                yield "<td class=\"visible-md visible-lg\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 178), "html", null, true);
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
            // line 181
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 185
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 186
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 186, $this->source); })()), "page" =>             // line 187
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 187, $this->source); })()), "limit" =>             // line 188
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 188, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_index"), "sessionVar" => "sms"]);
            // line 192
            yield "</div>
";
        } elseif ( !        // line 193
(isset($context["configured"]) || array_key_exists("configured", $context) ? $context["configured"] : (function () { throw new RuntimeError('Variable "configured" does not exist.', 193, $this->source); })())) {
            // line 194
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["header" => "mautic.sms.disabled", "message" => "mautic.sms.enable.in.configuration"]);
        } else {
            // line 196
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "mautic.sms.create.in.campaign.builder"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSms/Sms/list.html.twig";
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
        return array (  282 => 196,  279 => 194,  277 => 193,  274 => 192,  272 => 188,  271 => 187,  270 => 186,  269 => 185,  264 => 181,  246 => 178,  244 => 177,  237 => 175,  234 => 174,  231 => 173,  229 => 172,  223 => 168,  215 => 164,  213 => 163,  209 => 162,  204 => 161,  202 => 157,  201 => 155,  197 => 152,  195 => 149,  194 => 145,  193 => 144,  192 => 143,  191 => 141,  190 => 140,  189 => 138,  188 => 135,  186 => 129,  184 => 122,  182 => 120,  181 => 119,  180 => 118,  179 => 117,  175 => 115,  172 => 114,  154 => 113,  149 => 109,  147 => 100,  143 => 98,  141 => 88,  139 => 77,  137 => 72,  136 => 66,  131 => 62,  129 => 61,  122 => 60,  113 => 56,  109 => 54,  107 => 52,  100 => 48,  97 => 47,  95 => 15,  94 => 12,  93 => 10,  92 => 9,  90 => 8,  87 => 7,  80 => 6,  69 => 5,  58 => 4,  54 => 3,  52 => 2,  50 => 1,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSms/Sms/list.html.twig", "/app/docroot/app/bundles/SmsBundle/Resources/views/Sms/list.html.twig");
    }
}
