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

/* @MauticUser/User/list.html.twig */
class __TwigTemplate_a11b332067509afd0701cc04bd46c388 extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticUser/User/list.html.twig", 4);
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
        yield "user
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "\t";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.users", [], "messages");
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "\t<div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 14
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 15
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 15, $this->source); })()), "action" =>             // line 16
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 16, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 19
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "create", [], "array", false, false, false, 19)], "routeBase" => "user", "langVar" => "user.user"]), "quickFilters" => [["search" => "mautic.user.user.searchcommand.isadmin", "label" => "mautic.user.role.form.isadmin", "tooltip" => "mautic.core.search.quickfilter.is_admin", "icon" => "ri-admin-line"], ["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.active", "tooltip" => "mautic.core.search.quickfilter.is_published", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.inactive", "tooltip" => "mautic.core.search.quickfilter.is_unpublished", "icon" => "ri-close-line"]]]);
            // line 45
            yield "<div class=\"page-list\">
\t\t\t";
            // line 46
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t\t</div>
\t</div>
\t";
        } else {
            // line 50
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-hover user-list\" id=\"userTable\">
\t\t\t<thead>
\t\t\t\t<tr>";
        // line 59
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#userTable", "langVar" => "user.user", "routeBase" => "user", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,         // line 65
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 65, $this->source); })()), "delete", [], "array", false, false, false, 65)]]);
        // line 69
        yield "<th class=\"visible-md visible-lg col-user-avatar\"></th>";
        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.lastName, u.firstName, u.username", "text" => "mautic.core.name", "class" => "col-user-name", "default" => true]);
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.username", "text" => "mautic.core.username", "class" => "col-user-username"]);
        // line 83
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.email", "text" => "mautic.core.type.email", "class" => "visible-md visible-lg col-user-email"]);
        // line 90
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "r.name", "text" => "mautic.user.role", "class" => "visible-md visible-lg col-user-role"]);
        // line 97
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "r.name", "text" => "mautic.user.lastlogin", "class" => "visible-md visible-lg col-user-lastlogin"]);
        // line 104
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-user-id"]);
        // line 111
        yield "</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 114, $this->source); })()));
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
            // line 115
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 117
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 118
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,             // line 120
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 120, $this->source); })()), "edit", [], "array", false, false, false, 120), "delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 121
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 121, $this->source); })()), "delete", [], "array", false, false, false, 121)], "routeBase" => "user", "langVar" => "user.user", "pull" => "left"]);
            // line 127
            yield "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">
\t\t\t\t\t\t\t<img class=\"img img-responsive img-thumbnail w-44\" src=\"";
            // line 129
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 129), "50");
            yield "\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 133
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 133) != (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 133, $this->source); })()))) {
                // line 134
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 135
$context["item"], "model" => "user"]);
            }
            // line 139
            yield "\t\t\t\t\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 139, $this->source); })()), "edit", [], "array", false, false, false, 139)) {
                // line 140
                yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 140)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [true], "method", false, false, false, 141), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 144
                yield "\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [true], "method", false, false, false, 144), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t";
            }
            // line 146
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"small\">
\t\t\t\t\t\t\t\t<em>";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPosition", [], "method", false, false, false, 148), "html", null, true);
            yield "</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getUsername", [], "method", false, false, false, 151), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">
\t\t\t\t\t\t\t<a href=\"mailto: ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 153), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 153), "html", null, true);
            yield "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getRole", [], "method", false, false, false, 155), "getName", [], "method", false, false, false, 155), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 156
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getLastLogin", [], "method", false, false, false, 156), "local", "Y-m-d H:i:s", true);
            yield "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 157), "html", null, true);
            yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
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
        // line 160
        yield "\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"panel-footer\">";
        // line 163
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 164
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 164, $this->source); })())), "page" =>         // line 165
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 165, $this->source); })()), "limit" =>         // line 166
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 166, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_index"), "sessionVar" => "user"]);
        // line 170
        yield "</div>
\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/User/list.html.twig";
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
        return array (  271 => 170,  269 => 166,  268 => 165,  267 => 164,  266 => 163,  262 => 160,  245 => 157,  241 => 156,  237 => 155,  230 => 153,  225 => 151,  219 => 148,  215 => 146,  209 => 144,  203 => 141,  198 => 140,  195 => 139,  192 => 135,  191 => 134,  189 => 133,  182 => 129,  178 => 127,  176 => 121,  175 => 120,  174 => 118,  173 => 117,  170 => 115,  153 => 114,  148 => 111,  146 => 104,  144 => 97,  142 => 90,  140 => 83,  138 => 77,  136 => 70,  134 => 69,  132 => 65,  131 => 59,  126 => 55,  119 => 54,  110 => 50,  103 => 46,  100 => 45,  98 => 19,  97 => 16,  96 => 15,  95 => 14,  93 => 13,  90 => 12,  83 => 11,  77 => 8,  70 => 7,  58 => 5,  54 => 4,  52 => 2,  50 => 1,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/User/list.html.twig", "/app/docroot/app/bundles/UserBundle/Resources/views/User/list.html.twig");
    }
}
