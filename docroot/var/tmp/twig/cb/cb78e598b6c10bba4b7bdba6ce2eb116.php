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

/* @Marketplace/Package/list.html.twig */
class __TwigTemplate_97011675837d4d67bb6f167c95ef9180 extends Template
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
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@Marketplace/Package/list.html.twig", 4);
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
        yield "Package";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.title"));
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => [["attr" => ["class" => "btn btn-primary btn-nospin", "data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_CLEAR_CACHE"))], "iconClass" => "ri-refresh-line", "btnText" => "marketplace.clear.cache", "tooltip" => "marketplace.clear.cache.tooltip"]]]);
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "        ";
            if ((isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 28, $this->source); })())) {
                // line 29
                yield "            <div class=\"alert alert-info\" role=\"alert\">
                ";
                // line 30
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.beta.warning", [], "messages");
                // line 31
                yield "            </div>
        ";
            } else {
                // line 33
                yield "            <div class=\"alert alert-warning\" role=\"alert\">
                ";
                // line 34
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.composer.required", [], "messages");
                // line 35
                yield "            </div>
        ";
            }
            // line 37
            yield "        <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 38
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 39
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 39, $this->source); })()), "action" =>             // line 40
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })())]);
            // line 42
            yield "<div class=\"page-list\">
                ";
            // line 43
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
            </div>
        </div>
    ";
        } else {
            // line 47
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 52, $this->source); })()))) {
            // line 53
            yield "        <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"marketplace-packages-table\">
            <thead>
            <tr>";
            // line 57
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#packages-table", "langVar" => "marketplace.package", "routeBase" => "marketplace"]);
            // line 67
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.core.name"]);
            // line 73
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "marketplace.vendor"]);
            // line 79
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "marketplace.downloads"]);
            // line 85
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "marketplace.favers"]);
            // line 91
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 94, $this->source); })()));
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
                // line 95
                yield "                <tr>
                    <td>";
                // line 97
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 100
$context["item"], "customButtons" => []]);
                // line 104
                yield "</td>
                    <td class=\"package-name\">
                        <div>
                            <a data-toggle=\"ajax\" href=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_DETAIL"), ["vendor" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,                 // line 110
$context["item"], "getVendorName", [], "method", false, false, false, 110)), "package" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,                 // line 111
$context["item"], "getPackageName", [], "method", false, false, false, 111))]), "html", null, true);
                // line 113
                yield "\">
                                ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getHumanPackageName", [], "method", false, false, false, 114));
                yield "
                            </a>
                        </div>
                        ";
                // line 117
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 117)) {
                    // line 118
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 119
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 119));
                    yield "</small>
                            </div>
                        ";
                }
                // line 122
                yield "                    </td>
                    <td class=\"vendor-name\">";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getVendorName", [], "method", false, false, false, 123));
                yield "</td>
                    <td class=\"downloads\">";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "downloads", [], "any", false, false, false, 124));
                yield "</td>
                    <td class=\"favers\">";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "favers", [], "any", false, false, false, 125));
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
            // line 128
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 133
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 136
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 136, $this->source); })()), "page" =>             // line 137
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 137, $this->source); })()), "limit" =>             // line 138
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 138, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST")), "sessionVar" => "marketplace.package", "routeBase" => Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST")]);
            // line 144
            yield "</div>
    ";
        } else {
            // line 146
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "marketplace.noresults.tip"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Marketplace/Package/list.html.twig";
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
        return array (  272 => 146,  268 => 144,  266 => 138,  265 => 137,  264 => 136,  263 => 133,  258 => 128,  241 => 125,  237 => 124,  233 => 123,  230 => 122,  224 => 119,  221 => 118,  219 => 117,  213 => 114,  210 => 113,  208 => 111,  207 => 110,  206 => 107,  201 => 104,  199 => 100,  198 => 97,  195 => 95,  178 => 94,  173 => 91,  171 => 85,  169 => 79,  167 => 73,  165 => 67,  163 => 57,  158 => 53,  156 => 52,  149 => 51,  140 => 47,  133 => 43,  130 => 42,  128 => 40,  127 => 39,  126 => 38,  124 => 37,  120 => 35,  118 => 34,  115 => 33,  111 => 31,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  93 => 26,  88 => 8,  81 => 7,  70 => 6,  59 => 5,  55 => 4,  53 => 2,  51 => 1,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Marketplace/Package/list.html.twig", "/app/docroot/app/bundles/MarketplaceBundle/Resources/views/Package/list.html.twig");
    }
}
