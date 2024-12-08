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

/* @MauticStage/Stage/list.html.twig */
class __TwigTemplate_6496e26cf2fa2a243dff0898d71d568c extends Template
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
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticStage/Stage/list.html.twig", 4);
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

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "stage";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "\t";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.stages.menu.root", [], "messages");
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "<div id=\"page-list-wrapper\" class=\"panel panel-default\">
    ";
            // line 13
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 14
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 14, $this->source); })()), "action" =>             // line 15
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 15, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), "stage:stages:create", [], "array", false, false, false, 18)], "routeBase" => "stage"]), "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.active", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.inactive", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.isuncategorized", "label" => "mautic.core.form.uncategorized", "tooltip" => "mautic.core.searchcommand.isuncategorized.description", "icon" => "ri-folder-unknow-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 48
            yield "
    <div class=\"page-list\">
        ";
            // line 50
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
    </div>
</div>
";
        } else {
            // line 54
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
";
        }
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "    ";
        if ((array_key_exists("items", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 59, $this->source); })())))) {
            // line 60
            yield "        <div class=\"table-responsive page-list\">
        <table class=\"table table-hover stage-list\" id=\"stageTable\">
            <thead>
            <tr>";
            // line 64
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#stageTable", "routeBase" => "stage", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 70
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 70, $this->source); })()), "stage:stages:delete", [], "array", false, false, false, 70)]]);
            // line 73
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "s.name", "text" => "mautic.core.name", "class" => "col-stage-name", "default" => true]);
            // line 81
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-stage-category"]);
            // line 88
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "s.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-stage-id"]);
            // line 95
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 98, $this->source); })()));
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
                // line 99
                yield "                <tr>
                    <td>";
                // line 101
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 103
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 105
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 105, $this->source); })()), "stage:stages:edit", [], "array", false, false, false, 105), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 106
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 106, $this->source); })()), "stage:stages:create", [], "array", false, false, false, 106), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 107
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 107, $this->source); })()), "stage:stages:delete", [], "array", false, false, false, 107)], "routeBase" => "stage"]);
                // line 111
                yield "</td>
                    <td>
                        <div>";
                // line 114
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 115
$context["item"], "model" => "stage"]);
                // line 116
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 116, $this->source); })()), "stage:stages:edit", [], "array", false, false, false, 116)) {
                    // line 117
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_stage_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 119
$context["item"], "getId", [], "method", false, false, false, 119)]), "html", null, true);
                    // line 120
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 121), "html", null, true);
                    yield "
                            </a>
                            ";
                } else {
                    // line 124
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 124), "html", null, true);
                    yield "
                            ";
                }
                // line 126
                yield "                        </div>
                        ";
                // line 127
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 127);
                // line 128
                yield "                        ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 128, $this->source); })())) {
                    // line 129
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 130
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 130, $this->source); })()));
                    yield "</small>
                            </div>
                        ";
                }
                // line 133
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 135
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 135);
                // line 136
                yield "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 136, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 136, $this->source); })()), "getTitle", [], "method", false, false, false, 136)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 137
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 137, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 137, $this->source); })()), "getColor", [], "method", false, false, false, 137))) : (""));
                // line 138
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 138, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 138, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 140), "html", null, true);
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
            // line 143
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 147
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 149
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 149, $this->source); })())), "page" =>             // line 150
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 150, $this->source); })()), "limit" =>             // line 151
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 151, $this->source); })()), "menuLinkId" => "mautic_stage_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_stage_index"), "sessionVar" => "stage"]);
            // line 156
            yield "</div>
    ";
        } else {
            // line 158
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.stage.action.noresults.tip"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticStage/Stage/list.html.twig";
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
        return array (  270 => 158,  266 => 156,  264 => 151,  263 => 150,  262 => 149,  261 => 147,  256 => 143,  239 => 140,  231 => 138,  228 => 137,  225 => 136,  223 => 135,  219 => 133,  213 => 130,  210 => 129,  207 => 128,  205 => 127,  202 => 126,  196 => 124,  190 => 121,  187 => 120,  185 => 119,  183 => 117,  181 => 116,  179 => 115,  178 => 114,  174 => 111,  172 => 107,  171 => 106,  170 => 105,  169 => 103,  168 => 101,  165 => 99,  148 => 98,  143 => 95,  141 => 88,  139 => 81,  137 => 73,  135 => 70,  134 => 64,  129 => 60,  126 => 59,  119 => 58,  110 => 54,  103 => 50,  99 => 48,  97 => 18,  96 => 15,  95 => 14,  94 => 13,  91 => 12,  89 => 11,  82 => 10,  76 => 7,  69 => 6,  58 => 5,  54 => 4,  52 => 2,  50 => 1,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticStage/Stage/list.html.twig", "/app/docroot/app/bundles/StageBundle/Resources/views/Stage/list.html.twig");
    }
}
