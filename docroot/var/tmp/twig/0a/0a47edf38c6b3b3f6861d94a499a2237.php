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

/* @MauticCategory/Category/list.html.twig */
class __TwigTemplate_5434ee63517cbef05cd373af84f4a078 extends Template
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
            'muaticContent' => [$this, 'block_muaticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCategory/Category/list.html.twig", 4);
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
    public function block_muaticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "category
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "\t";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.category.header.index", [], "messages");
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 13, $this->source); })())) {
            // line 14
            yield "\t\t<div id=\"page-list-wrapper\" class=\"panel panel-default\">
\t\t\t";
            // line 16
            yield "\t\t\t";
            // line 20
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 21
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 21, $this->source); })()), "filters" => ["bundle" => ["options" =>             // line 24
(isset($context["categoryTypes"]) || array_key_exists("categoryTypes", $context) ? $context["categoryTypes"] : (function () { throw new RuntimeError('Variable "categoryTypes" does not exist.', 24, $this->source); })()), "values" => [            // line 25
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 25, $this->source); })())], "translateLabels" => true]], "action" =>             // line 29
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 29, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 32
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 32, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 32, $this->source); })()) . ":create"), [], "array", false, false, false, 32)], "routeBase" => "category", "query" => ["bundle" =>             // line 36
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 36, $this->source); })()), "show_bundle_select" => true], "editMode" => "ajaxModal", "editAttr" => ["data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.category.header.new"), "data-toggle" => "ajaxmodal"]]), "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.available", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.unavailable", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"]]]);
            // line 61
            yield "<div class=\"page-list\">
                ";
            // line 62
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 66
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        // line 68
        yield "
";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "\t";
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 73, $this->source); })()))) {
            // line 74
            yield "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover category-list\" id=\"categoryTable\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>";
            // line 78
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#categoryTable", "routeBase" => "category", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 83
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 83, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 83, $this->source); })()) . ":delete"), [], "array", false, false, false, 83)], "query" => ["bundle" =>             // line 86
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 86, $this->source); })())]]);
            // line 90
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "text" => "", "class" => "col-category-color"]);
            // line 99
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.title", "text" => "mautic.core.title", "class" => "col-category-title", "default" => true]);
            // line 107
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.bundle", "text" => "mautic.core.type", "class" => "visible-md visible-lg col-page-bundle"]);
            // line 114
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-page-id"]);
            // line 120
            yield "</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 123, $this->source); })()));
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
                // line 124
                yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 126
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.category.header.edit", ["%type%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((("mautic." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 126)) . ".") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 126))), "%name%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 126)]);
                // line 127
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 128
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 130
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 130, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 130, $this->source); })()) . ":edit"), [], "array", false, false, false, 130), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 131
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 131, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 131, $this->source); })()) . ":delete"), [], "array", false, false, false, 131)], "editMode" => "ajaxmodal", "editAttr" => ["data-target" => "#MauticSharedModal", "data-header" =>                 // line 136
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 136, $this->source); })()), "data-toggle" => "ajaxmodal"], "routeBase" => "category", "query" => ["bundle" =>                 // line 141
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 141, $this->source); })())]]);
                // line 144
                yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 146
                $context["color"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getColor", [], "method", false, false, false, 146);
                // line 147
                yield "\t\t\t\t\t\t\t\t<span class=\"label label-gray label-category\" style=\"background: ";
                yield ((!CoreExtension::inFilter("#", (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 147, $this->source); })()))) ? ("#") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 147, $this->source); })()), "html", null, true);
                yield ";\"> </span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
                                <div>";
                // line 151
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 152
$context["item"], "model" => "category", "query" => ("bundle=" . (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 152, $this->source); })()))]);
                // line 153
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 153, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 153, $this->source); })()) . ":edit"), [], "array", false, false, false, 153)) {
                    // line 154
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_category_action", ["bundle" =>                     // line 155
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 155, $this->source); })()), "objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 155)]), "html", null, true);
                    yield "\" data-toggle=\"ajaxmodal\" data-target=\"#MauticSharedModal\" data-header=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 155, $this->source); })()), "html", null, true);
                    yield "\"
                                    ";
                }
                // line 157
                yield "                                    <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 157), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getAlias", [], "method", false, false, false, 157), "html", null, true);
                yield ")</span>
                                    ";
                // line 158
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 158, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 158, $this->source); })()) . ":edit"), [], "array", false, false, false, 158)) {
                    // line 159
                    yield "                                        </a>
                                    ";
                }
                // line 161
                yield "                                </div>
                                ";
                // line 162
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 162);
                // line 163
                yield "                                ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 163, $this->source); })())) {
                    // line 164
                    yield "                                    <div class=\"text-muted mt-4\">
                                        <small>";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 165, $this->source); })()), "html", null, true);
                    yield "</small>
                                    </div>
                                ";
                }
                // line 168
                yield "                            </td>
                            <td class=\"visible-md visible-lg\">
                                ";
                // line 170
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["categoryTypes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 170), [], "array", true, true, false, 170)) {
                    // line 171
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryTypes"]) || array_key_exists("categoryTypes", $context) ? $context["categoryTypes"] : (function () { throw new RuntimeError('Variable "categoryTypes" does not exist.', 171, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 171), [], "array", false, false, false, 171)), "html", null, true);
                    yield "
                                ";
                }
                // line 173
                yield "                            </td>
                            <td class=\"visible-md visible-lg\">";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 174), "html", null, true);
                yield "</td>
\t\t\t\t\t\t</tr>
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
            // line 177
            yield "\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"panel-footer\">";
            // line 179
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 181
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 181, $this->source); })())), "page" =>             // line 182
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 182, $this->source); })()), "limit" =>             // line 183
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "menuLinkId" => "mautic_category_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_category_index", ["bundle" => ((("category" ==             // line 188
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 188, $this->source); })()))) ? ("all") : ((isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 188, $this->source); })())))]), "sessionVar" => "category"]);
            // line 192
            yield "</div>
\t\t\t\t</tbody>
\t\t\t</div>
\t\t";
        } else {
            // line 196
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.category.noresults.tip"]);
        }
        // line 198
        yield "\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCategory/Category/list.html.twig";
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
        return array (  298 => 198,  295 => 196,  289 => 192,  287 => 188,  286 => 183,  285 => 182,  284 => 181,  283 => 179,  280 => 177,  263 => 174,  260 => 173,  254 => 171,  252 => 170,  248 => 168,  242 => 165,  239 => 164,  236 => 163,  234 => 162,  231 => 161,  227 => 159,  225 => 158,  218 => 157,  211 => 155,  209 => 154,  207 => 153,  205 => 152,  204 => 151,  196 => 147,  194 => 146,  190 => 144,  188 => 141,  187 => 136,  186 => 131,  185 => 130,  184 => 128,  183 => 127,  181 => 126,  177 => 124,  160 => 123,  155 => 120,  153 => 114,  151 => 107,  149 => 99,  147 => 90,  145 => 86,  144 => 83,  143 => 78,  138 => 74,  135 => 73,  128 => 72,  122 => 68,  116 => 66,  109 => 62,  106 => 61,  104 => 36,  103 => 32,  102 => 29,  101 => 25,  100 => 24,  99 => 21,  98 => 20,  96 => 16,  93 => 14,  90 => 13,  83 => 12,  77 => 9,  70 => 8,  58 => 6,  54 => 4,  52 => 2,  50 => 1,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCategory/Category/list.html.twig", "/app/docroot/app/bundles/CategoryBundle/Resources/views/Category/list.html.twig");
    }
}
