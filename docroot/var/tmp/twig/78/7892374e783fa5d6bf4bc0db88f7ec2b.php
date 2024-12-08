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

/* @MauticWebhook/Webhook/details.html.twig */
class __TwigTemplate_32aa69db371c4f99983a3e48f390d259 extends Template
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
            'indexButton' => [$this, 'block_indexButton'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticWebhook/Webhook/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 6
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 9, $this->source); })()), "webhook:webhooks:viewown", [], "array", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "webhook:webhooks:viewother", [], "array", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 11))], "routeBase" => "webhook", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.webhook.webhooks")]);
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "getName", [], "method", false, false, false, 19), "html", null, true);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "mauticWebhook";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 25
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "webhook:webhooks:editown", [], "array", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "webhook:webhooks:editother", [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 30)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 32, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 32), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 34, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 36))], "routeBase" => "webhook"]);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        ";
        // line 48
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticWebhook/Webhook/details.html.twig", 48)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48)]));
        // line 49
        yield "        <div class=\"pa-md\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 52
        $context["hookLog"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "getLimitedLogs", [], "method", false, false, false, 52);
        // line 53
        yield "                    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["hookLog"]) || array_key_exists("hookLog", $context) ? $context["hookLog"] : (function () { throw new RuntimeError('Variable "hookLog" does not exist.', 53, $this->source); })()))) {
            // line 54
            yield "                        <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\" style=\"white-space: normal;\">
                            <h4>
                                ";
            // line 56
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.no.logs", [], "messages");
            // line 57
            yield "                            </h4>
                            <p>
                                ";
            // line 59
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.no.logs_desc", [], "messages");
            // line 60
            yield "                            </p>
                        </div>
                    ";
        } else {
            // line 63
            yield "                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>
                                        ";
            // line 67
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.id", [], "messages");
            // line 68
            yield "                                    </th>
                                    <th>
                                        ";
            // line 70
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.status", [], "messages");
            // line 71
            yield "                                    </th>
                                    <th>
                                        ";
            // line 73
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.note", [], "messages");
            // line 74
            yield "                                    </th>
                                    <th>
                                        ";
            // line 76
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.runtime", [], "messages");
            // line 77
            yield "                                    </th>
                                    <th>
                                        ";
            // line 79
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.date.added", [], "messages");
            // line 80
            yield "                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hookLog"]) || array_key_exists("hookLog", $context) ? $context["hookLog"] : (function () { throw new RuntimeError('Variable "hookLog" does not exist.', 84, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 85
                yield "                                    <tr>
                                        <td>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getId", [], "method", false, false, false, 86), "html", null, true);
                yield "</td>
                                        <td>";
                // line 87
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticWebhook/Helper/labelcode.html.twig", ["code" => CoreExtension::getAttribute($this->env, $this->source,                 // line 89
$context["log"], "getStatusCode", [], "method", false, false, false, 89)]);
                // line 91
                yield "</td>
                                        <td>";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getNote", [], "method", false, false, false, 92))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getNote", [], "method", false, false, false, 92)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.webhook.webhook.logs.empty.response"))), "html", null, true);
                yield "</td>
                                        <td>";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getRuntime", [], "method", false, false, false, 93), "html", null, true);
                yield " s</td>
                                        <td>";
                // line 94
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getDateAdded", [], "method", false, false, false, 94));
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
            unset($context['_seq'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                            </tbody>
                        </table>
                        <div class=\"alert alert-info col-md-6 col-md-offset-3 mt-md\">
                            <h4>
                                ";
            // line 101
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook.logs.title", [], "messages");
            // line 102
            yield "                            </h4>
                            <p>
                                ";
            // line 104
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook.logs.desc", [], "messages");
            // line 105
            yield "                            </p>
                        </div>
                    ";
        }
        // line 108
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- preview URL -->
        <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 118
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook_url", [], "messages");
        yield "</div>
            </div>
            <div class=\"panel-body pt-xs\">
                <div class=\"input-group\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly
                           value=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 123, $this->source); })()), "getWebhookUrl", [], "method", false, false, false, 123), "html_attr");
        yield "\" />
                    <span class=\"input-group-btn\">
                        ";
        // line 125
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticWebhook/Webhook/details.html.twig", 125)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.open_link", "variant" => "ghost", "icon_only" => true, "icon" => "ri-external-link-line", "onclick" => (("window.open(\"" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,         // line 132
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 132, $this->source); })()), "getWebhookUrl", [], "method", false, false, false, 132), "html_attr")) . "\", \"_blank\");")]]]));
        // line 136
        yield "                    </span>
                </div>
            </div>

            <hr class=\"hr-w-2\" style=\"width:50%\">

            <!-- recent activity -->";
        // line 143
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" =>         // line 145
(isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 145, $this->source); })())]);
        // line 147
        yield "
        </div>
    </div>
    <!--/ right section -->
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticWebhook/Webhook/details.html.twig";
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
        return array (  306 => 147,  304 => 145,  303 => 143,  295 => 136,  293 => 132,  292 => 125,  287 => 123,  279 => 118,  267 => 108,  262 => 105,  260 => 104,  256 => 102,  254 => 101,  248 => 97,  231 => 94,  227 => 93,  223 => 92,  220 => 91,  218 => 89,  217 => 87,  213 => 86,  210 => 85,  193 => 84,  187 => 80,  185 => 79,  181 => 77,  179 => 76,  175 => 74,  173 => 73,  169 => 71,  167 => 70,  163 => 68,  161 => 67,  155 => 63,  150 => 60,  148 => 59,  144 => 57,  142 => 56,  138 => 54,  135 => 53,  133 => 52,  128 => 49,  126 => 48,  120 => 44,  113 => 43,  108 => 36,  107 => 35,  106 => 34,  105 => 32,  104 => 30,  103 => 29,  102 => 28,  101 => 25,  100 => 23,  93 => 22,  82 => 20,  71 => 19,  66 => 11,  65 => 10,  64 => 9,  63 => 6,  62 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticWebhook/Webhook/details.html.twig", "/app/docroot/app/bundles/WebhookBundle/Resources/views/Webhook/details.html.twig");
    }
}
