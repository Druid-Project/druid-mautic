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

/* @MauticChannel/Message/details.html.twig */
class __TwigTemplate_b5a6607c50ef4cd5f601ae6580202cc8 extends Template
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
            'mauicContent' => [$this, 'block_mauicContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'indexButton' => [$this, 'block_indexButton'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
            'rightFormContent' => [$this, 'block_rightFormContent'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticChannel/Message/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauicContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "message
";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "getName", [], "method", false, false, false, 7), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 13
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "channel:messages:viewown", [], "array", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "channel:messages:viewother", [], "array", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 15))], "routeBase" => "message", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.channel.messages")]);
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 25
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "channel:messages:editown", [], "array", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "channel:messages:editother", [], "array", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 27)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "channel:messages:create", [], "array", false, false, false, 28), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "channel:messages:deleteown", [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "channel:messages:deleteother", [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 29))], "routeBase" => "message"]);
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })())]);
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "<!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- left section -->
        <div class=\"col-md-9 height-auto\">
            <div>
                <!-- form detail header -->
                ";
        // line 46
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticChannel/Message/details.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46)]));
        // line 47
        yield "                <!--/ form detail header -->
                <!-- form detail collapseable -->
                <div class=\"collapse pr-md pl-md\" id=\"focus-details\">
                    <div class=\"pr-md pl-md pb-md\">
                        <div class=\"panel shd-none mb-0\">
                            <table class=\"table table-hover mb-0\">
                                <tbody>";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })())]);
        // line 55
        yield "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ form detail collapseable -->
            </div>

        <!--/ form detail collapseable toggler -->
            <div>
                <!-- form detail collapseable toggler -->
                <div class=\"hr-expand nm\">
                        <span data-toggle=\"tooltip\" title=\"";
        // line 67
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        yield "\">
                            <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#focus-details\"><span class=\"caret\"></span> ";
        // line 68
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        yield "</a>
                        </span>
                </div>
                <!-- stats -->
                <div class=\"pa-md\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"panel\">
                                <div class=\"panel-body box-layout\">
                                    <div class=\"col-md-6 va-m\">
                                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                            <div><i class=\"ri-line-chart-fill pull-left\"></i>
                                                <span class=\"pull-left\"> ";
        // line 80
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messages.processed.messages", [], "messages");
        yield "</span></div>
                                        </h5>
                                    </div>
                                    <div class=\"col-md-9 va-m\">";
        // line 84
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 84, $this->source); })()), "class" => "pull-right"]);
        // line 85
        yield "</div>
                                </div>
                                <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 88
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["eventCounts"]) || array_key_exists("eventCounts", $context) ? $context["eventCounts"] : (function () { throw new RuntimeError('Variable "eventCounts" does not exist.', 88, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 89
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ stats -->
                ";
        // line 95
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

                <!-- tabs controls -->
                <ul class=\"nav nav-tabs nav-tabs-contained\">
                    ";
        // line 99
        $context["active"] = "active";
        // line 100
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messagedLeads"]) || array_key_exists("messagedLeads", $context) ? $context["messagedLeads"] : (function () { throw new RuntimeError('Variable "messagedLeads" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["contacts"]) {
            // line 101
            yield "                    <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "\">
                        <a href=\"#contacts-";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((( !("all" === $context["channel"])) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 103, $this->source); })()), $context["channel"], [], "array", false, false, false, 103), "label", [], "array", false, false, false, 103)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"))), "html", null, true);
            yield "
                        </a>
                    </li>
                    ";
            // line 106
            $context["active"] = "";
            // line 107
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['channel'], $context['contacts'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                </ul>
                <!--/ tabs controls -->
            </div>

            <!-- start: tab-content -->
            <div class=\"tab-content pa-md\">
            ";
        // line 114
        $context["active"] = " active in";
        // line 115
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messagedLeads"]) || array_key_exists("messagedLeads", $context) ? $context["messagedLeads"] : (function () { throw new RuntimeError('Variable "messagedLeads" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["contacts"]) {
            // line 116
            yield "                <div class=\"tab-pane bdr-w-0 page-list";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 116, $this->source); })()), "html", null, true);
            yield "\" id=\"contacts-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "\">
                    ";
            // line 117
            $context["message"] = ((("all" === $context["channel"])) ? ("mautic.channel.message.all_contacts") : ("mautic.channel.message.channel_contacts"));
            // line 118
            yield "                    <div class=\"alert alert-info\"><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 118, $this->source); })())), "html", null, true);
            yield "</strong></div>
                    <div class=\"message-";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "\">
                        ";
            // line 120
            yield $context["contacts"];
            yield "
                    </div>
                </div>
                ";
            // line 123
            $context["active"] = "";
            // line 124
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['channel'], $context['contacts'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "            </div>
        </div>
        <!-- right section -->
        <div class=\"col-md-3 bdr-l height-auto\">
            <!-- recent activity -->";
        // line 130
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 130, $this->source); })())]);
        // line 131
        yield from $this->unwrap()->yieldBlock('rightFormContent', $context, $blocks);
        // line 133
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rightFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 132
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticChannel/Message/details.html.twig";
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
        return array (  316 => 132,  309 => 131,  302 => 133,  300 => 131,  298 => 130,  292 => 125,  286 => 124,  284 => 123,  278 => 120,  274 => 119,  269 => 118,  267 => 117,  260 => 116,  255 => 115,  253 => 114,  245 => 108,  239 => 107,  237 => 106,  231 => 103,  227 => 102,  222 => 101,  217 => 100,  215 => 99,  208 => 95,  200 => 89,  198 => 88,  194 => 85,  192 => 84,  186 => 80,  171 => 68,  167 => 67,  153 => 55,  151 => 54,  143 => 47,  141 => 46,  133 => 40,  126 => 39,  121 => 36,  114 => 35,  109 => 29,  108 => 28,  107 => 27,  106 => 25,  105 => 24,  98 => 23,  93 => 15,  92 => 13,  91 => 11,  84 => 10,  76 => 7,  69 => 6,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticChannel/Message/details.html.twig", "/app/docroot/app/bundles/ChannelBundle/Resources/views/Message/details.html.twig");
    }
}
