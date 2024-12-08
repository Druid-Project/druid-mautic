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

/* @MauticWebhook/Webhook/list.html.twig */
class __TwigTemplate_6209e7295e5cf822e31089b39bbd5c08 extends Template
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
        // line 5
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 5, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticWebhook/Webhook/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()) == "index")) ? (true) : (false));
        // line 3
        $context["tmpl"] = "list";
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhooks", [], "messages");
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "mauticWebhook";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 14)], "routeBase" => "webhook"]);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "<div id=\"page-list-wrapper\" class=\"panel panel-default\">
    ";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 24
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 24, $this->source); })()), "action" =>             // line 25
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 25, $this->source); })()), "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.active", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.inactive", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 46
            yield "
    <div class=\"page-list\">
        ";
            // line 48
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
    </div>
</div>
";
        } else {
            // line 52
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
";
        }
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        if ((array_key_exists("items", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 57, $this->source); })())))) {
            // line 58
            yield "    <div class=\"table-responsive panel-collapse pull out webhook-list\">
        <table class=\"table table-hover webhook-list\" id=\"webhookTable\">
            <thead>
            <tr>";
            // line 62
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#webhookTable", "routeBase" => "webhook", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 68
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 68, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 68) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 68, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 68))]]);
            // line 71
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-webhook-name", "default" => true]);
            // line 79
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.webhookUrl", "text" => "mautic.webhook.webhook_url", "class" => "col-webhook-id visible-md visible-lg"]);
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "col-webhook-id visible-md visible-lg"]);
            // line 93
            yield "</tr>
            </thead>
            <tbody>
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 96, $this->source); })()));
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
                // line 97
                yield "                <tr>
                    <td>";
                // line 99
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 101
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 104
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "webhook:webhooks:editown", [], "array", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source,                 // line 105
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 105, $this->source); })()), "webhook:webhooks:editother", [], "array", false, false, false, 105), CoreExtension::getAttribute($this->env, $this->source,                 // line 106
$context["item"], "getCreatedBy", [], "method", false, false, false, 106)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 108
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 108, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 108), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 110
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 110, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 110), CoreExtension::getAttribute($this->env, $this->source,                 // line 111
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 111, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 111), CoreExtension::getAttribute($this->env, $this->source,                 // line 112
$context["item"], "getCreatedBy", [], "method", false, false, false, 112))], "routeBase" => "webhook"]);
                // line 117
                yield "</td>
                    <td>
                        <div>";
                // line 120
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 122
$context["item"], "model" => "webhook"]);
                // line 125
                yield "
                            <a data-toggle=\"ajax\" href=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_webhook_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 128
$context["item"], "getId", [], "method", false, false, false, 128), "objectAction" => "view"]), "html", null, true);
                // line 129
                yield "\">
                                ";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 130), "html", null, true);
                yield "
                            </a>
                            ";
                // line 132
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", true, true, false, 132) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 132)))) {
                    // line 133
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 134
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 134));
                    yield "</small>
                            </div>
                            ";
                }
                // line 137
                yield "                        </div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getWebhookUrl", [], "method", false, false, false, 139), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 140), "html", null, true);
                yield " </td>
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
            // line 148
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 150
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 150, $this->source); })())), "page" =>             // line 151
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 151, $this->source); })()), "limit" =>             // line 152
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 152, $this->source); })()), "menuLinkId" => "mautic_webhook_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_webhook_index"), "sessionVar" => "mautic_webhook"]);
            // line 157
            yield "
    </div>
";
        } else {
            // line 160
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
        return "@MauticWebhook/Webhook/list.html.twig";
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
        return array (  261 => 160,  256 => 157,  254 => 152,  253 => 151,  252 => 150,  251 => 148,  245 => 143,  228 => 140,  224 => 139,  220 => 137,  214 => 134,  211 => 133,  209 => 132,  204 => 130,  201 => 129,  199 => 128,  198 => 126,  195 => 125,  193 => 122,  192 => 120,  188 => 117,  186 => 112,  185 => 111,  184 => 110,  183 => 108,  182 => 106,  181 => 105,  180 => 104,  179 => 101,  178 => 99,  175 => 97,  158 => 96,  153 => 93,  151 => 86,  149 => 79,  147 => 71,  145 => 68,  144 => 62,  139 => 58,  137 => 57,  130 => 56,  121 => 52,  114 => 48,  110 => 46,  108 => 25,  107 => 24,  106 => 23,  103 => 22,  101 => 21,  94 => 20,  89 => 14,  88 => 11,  81 => 10,  70 => 8,  59 => 7,  55 => 5,  53 => 3,  51 => 2,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticWebhook/Webhook/list.html.twig", "/app/docroot/app/bundles/WebhookBundle/Resources/views/Webhook/list.html.twig");
    }
}
