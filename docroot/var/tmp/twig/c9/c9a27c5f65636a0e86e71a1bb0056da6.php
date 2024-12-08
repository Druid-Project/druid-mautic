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

/* @MauticUser/Role/list.html.twig */
class __TwigTemplate_840dc16c9a981b9d7e989f8ab4da7ce3 extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticUser/Role/list.html.twig", 4);
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
        yield "role";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.roles", [], "messages");
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 11
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 12
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 12, $this->source); })()), "action" =>             // line 13
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 13, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "create", [], "array", false, false, false, 16)], "routeBase" => "role", "langVar" => "user.role"]), "quickFilters" => [["search" => "mautic.user.user.searchcommand.isadmin", "label" => "mautic.user.role.form.isadmin", "tooltip" => "mautic.core.search.quickfilter.is_admin", "icon" => "ri-admin-line"]]]);
            // line 30
            yield "<div class=\"page-list\">
                ";
            // line 31
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
            </div>
    </div>
    ";
        } else {
            // line 35
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "<div class=\"table-responsive\">
    <table class=\"table table-hover role-list\" id=\"roleTable\">
        <thead>
        <tr>";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#roleTable", "langVar" => "user.role", "routeBase" => "role", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 51, $this->source); })()), "delete", [], "array", false, false, false, 51)]]);
        // line 56
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.name", "text" => "mautic.core.name", "class" => "col-role-name", "default" => true]);
        // line 67
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.description", "text" => "mautic.core.description", "class" => "visible-md visible-lg col-role-desc"]);
        // line 76
        yield "<th class=\"visible-md visible-lg col-rolelist-usercount\">
                ";
        // line 77
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.list.thead.usercount", [], "messages");
        // line 78
        yield "            </th>";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-role-id"]);
        // line 87
        yield "</tr>
        </thead>
        <tbody>
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 90, $this->source); })()));
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
            // line 91
            yield "            <tr>
                <td>";
            // line 93
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 95
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,             // line 97
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 97, $this->source); })()), "edit", [], "array", false, false, false, 97), "delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 98
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 98, $this->source); })()), "delete", [], "array", false, false, false, 98)], "routeBase" => "role", "langVar" => "user.role", "pull" => "left"]);
            // line 104
            yield "</td>
                <td>
                    ";
            // line 106
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 106, $this->source); })()), "edit", [], "array", false, false, false, 106)) {
                // line 107
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 108
$context["item"], "getId", [], "method", false, false, false, 108)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 109), "html", null, true);
                yield "
                        </a>
                    ";
            } else {
                // line 112
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 112), "html", null, true);
                yield "

                    ";
            }
            // line 115
            yield "                </td>
                <td class=\"visible-md visible-lg\">
                    ";
            // line 117
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 117));
            yield "
                </td>
                <td class=\"visible-md visible-lg\">
                    <a size=\"sm\" class=\"label label-gray\" href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_index", ["search" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.searchcommand.role") . ":&quot;") . CoreExtension::getAttribute($this->env, $this->source,             // line 121
$context["item"], "getName", [], "method", false, false, false, 121)) . "&quot;")]), "html", null, true);
            yield "\" data-toggle=\"ajax\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 121, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 121), [], "array", false, false, false, 121) == 0)) ? ("disabled=disabled") : (""));
            yield ">
                        ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.list.viewusers_count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source,             // line 123
(isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 123, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 123), [], "array", false, false, false, 123)]), "html", null, true);
            // line 124
            yield "
                    </a>
                </td>
                <td class=\"visible-md visible-lg\">
                    ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 128), "html", null, true);
            yield "
                </td>
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
        // line 132
        yield "        </tbody>
    </table>
</div>
<div class=\"panel-footer\">";
        // line 136
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 138
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 138, $this->source); })())), "page" =>         // line 139
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 139, $this->source); })()), "limit" =>         // line 140
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 140, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_index"), "sessionVar" => "role"]);
        // line 145
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/Role/list.html.twig";
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
        return array (  253 => 145,  251 => 140,  250 => 139,  249 => 138,  248 => 136,  243 => 132,  225 => 128,  219 => 124,  217 => 123,  216 => 122,  210 => 121,  209 => 120,  203 => 117,  199 => 115,  192 => 112,  186 => 109,  182 => 108,  180 => 107,  178 => 106,  174 => 104,  172 => 98,  171 => 97,  170 => 95,  169 => 93,  166 => 91,  149 => 90,  144 => 87,  142 => 79,  140 => 78,  138 => 77,  135 => 76,  133 => 67,  131 => 56,  129 => 51,  128 => 44,  123 => 40,  116 => 39,  107 => 35,  100 => 31,  97 => 30,  95 => 16,  94 => 13,  93 => 12,  92 => 11,  90 => 10,  87 => 9,  80 => 8,  69 => 6,  58 => 5,  54 => 4,  52 => 2,  50 => 1,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/Role/list.html.twig", "/app/docroot/app/bundles/UserBundle/Resources/views/Role/list.html.twig");
    }
}
