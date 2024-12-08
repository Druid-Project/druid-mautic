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

/* @MauticApi/Client/list.html.twig */
class __TwigTemplate_4295529d14f5d1d1a894157fb18dc1f5 extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticApi/Client/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()) == "index")) ? (true) : (false));
        // line 3
        $context["tmpl"] = "list";
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.api.client.header.index", [], "messages");
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "client";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "create", [], "any", false, false, false, 11)], "routeBase" => "client", "langVar" => "api.client"]);
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "        <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 22
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 23
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 23, $this->source); })()), "searchHelp" => "mautic.api.client.help.searchcommands", "filters" =>             // line 25
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })())]);
            // line 27
            yield "<div class=\"page-list\">
                ";
            // line 28
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
            </div>
        </div>
    ";
        } else {
            // line 32
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "<div class=\"table-responsive panel-collapse pull out page-list\">
    <table class=\"table table-hover client-list\">
        <thead>
        <tr>";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => false, "text" => null, "target" => ".client-list", "action" =>         // line 47
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 47, $this->source); })()), "routeBase" => "client", "templateButtons" => []]);
        // line 52
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "client", "orderBy" => "c.name", "text" => "mautic.core.name", "default" => "true", "class" => "col-client-name"]);
        // line 62
        yield "<th class=\"visible-md visible-lg col-client-publicid\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.thead.publicid"), "html", null, true);
        yield "</th>
            <th class=\"visible-md visible-lg col-client-secret\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.thead.secret"), "html", null, true);
        yield "</th>";
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "client", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-client-id"]);
        // line 73
        yield "</tr>
        </thead>
        <tbody>
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 76, $this->source); })()));
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
            // line 77
            yield "            <tr>
                <td>";
            // line 79
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 82
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,             // line 84
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "edit", [], "any", false, false, false, 84), "delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 85
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 85, $this->source); })()), "delete", [], "any", false, false, false, 85)], "routeBase" => "client", "langVar" => "api.client", "pull" => "left"]);
            // line 92
            yield "</td>
                <td>
                    ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 94), "html", null, true);
            yield "
                </td>
                <td class=\"visible-md visible-lg\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPublicId", [], "method", false, false, false, 97), "html", null, true);
            yield "\"/>
                </td>
                <td class=\"visible-md visible-lg\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSecret", [], "method", false, false, false, 100), "html", null, true);
            yield "\"/>
                </td>
                <td class=\"visible-md visible-lg\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 102), "html", null, true);
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
        // line 105
        yield "        </tbody>
    </table>
    <div class=\"panel-footer\">";
        // line 108
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 109
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 109, $this->source); })())), "page" =>         // line 110
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 110, $this->source); })()), "limit" =>         // line 111
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 111, $this->source); })()), "menuLinkId" => "mautic_client_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_client_index"), "sessionVar" => "client", "tmpl" =>         // line 115
(isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 115, $this->source); })())]);
        // line 117
        yield "</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticApi/Client/list.html.twig";
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
        return array (  234 => 117,  232 => 115,  231 => 111,  230 => 110,  229 => 109,  228 => 108,  224 => 105,  207 => 102,  202 => 100,  196 => 97,  190 => 94,  186 => 92,  184 => 85,  183 => 84,  182 => 82,  181 => 79,  178 => 77,  161 => 76,  156 => 73,  154 => 64,  151 => 63,  146 => 62,  144 => 52,  142 => 47,  141 => 41,  136 => 37,  129 => 36,  120 => 32,  113 => 28,  110 => 27,  108 => 25,  107 => 23,  106 => 22,  104 => 21,  101 => 20,  94 => 19,  89 => 11,  88 => 8,  81 => 7,  70 => 6,  59 => 5,  55 => 4,  53 => 3,  51 => 2,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticApi/Client/list.html.twig", "/app/docroot/app/bundles/ApiBundle/Resources/views/Client/list.html.twig");
    }
}
