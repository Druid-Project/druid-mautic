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

/* @MauticSms/Sms/details.html.twig */
class __TwigTemplate_1b6c559853befc3e0e91bed4638fbbd0 extends Template
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
            'indexButton' => [$this, 'block_indexButton'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 1, $this->source); })())) {
        }
        // line 66
        $context["smsType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 66, $this->source); })()), "getSmsType", [], "method", false, false, false, 66);
        // line 67
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["smsType"]) || array_key_exists("smsType", $context) ? $context["smsType"] : (function () { throw new RuntimeError('Variable "smsType" does not exist.', 67, $this->source); })()))) {
            // line 68
            $context["smsType"] = "template";
        }
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticSms/Sms/details.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "sms";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 6, $this->source); })()), "getName", [], "method", false, false, false, 6), "html", null, true);
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 11
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 11, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "sms:smses:viewown", [], "array", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "sms:smses:viewother", [], "array", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 16, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 16))], "routeBase" => "sms", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.smses")]);
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "    ";
        $context["customButtons"] = [];
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 29
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 29, $this->source); })()), "customButtons" => ((        // line 30
array_key_exists("customButtons", $context)) ? ((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 30, $this->source); })())) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 33, $this->source); })()), "sms:smses:editown", [], "array", false, false, false, 33), CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 34, $this->source); })()), "sms:smses:editother", [], "array", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 35, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 35)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 37, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 37), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 39, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 41, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 41))], "routeBase" => "sms"]);
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" =>         // line 51
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 51, $this->source); })()), "status" => (( !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 52, $this->source); })()), "getPublishUp", [], "method", false, false, false, 52))) ? ("sending") : ("available"))]);
        // line 54
        $context["tags"] = [["color" => "warm-gray", "label" => (((        // line 57
(isset($context["smsType"]) || array_key_exists("smsType", $context) ? $context["smsType"] : (function () { throw new RuntimeError('Variable "smsType" does not exist.', 57, $this->source); })()) == "list")) ? ("mautic.sms.type.list.header") : ((((        // line 59
(isset($context["smsType"]) || array_key_exists("smsType", $context) ? $context["smsType"] : (function () { throw new RuntimeError('Variable "smsType" does not exist.', 59, $this->source); })()) == "template")) ? ("mautic.sms.type.template.header") : ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 59, $this->source); })())))))]];
        // line 62
        yield "
";
        // line 63
        yield from         $this->loadTemplate("@MauticCore/Helper/_tag.html.twig", "@MauticSms/Sms/details.html.twig", 63)->unwrap()->yield(CoreExtension::merge($context, ["tags" => (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 63, $this->source); })())]));
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- page detail header -->
            <!-- sms detail collapseable toggler -->
            <div class=\"collapse pr-md pl-md\" id=\"sms-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>";
        // line 84
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 84, $this->source); })())]);
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 85, $this->source); })()), "getSmsType", [], "method", false, false, false, 85) == "list")) {
            // line 86
            yield "                                    <tr>
                                        <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.lists"), "html", null, true);
            yield "</span></td>
                                        <td>
                                            ";
            // line 89
            $context["segments"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 89, $this->source); })()), "getLists", [], "any", false, false, false, 89);
            // line 90
            yield "                                            ";
            $context["segmentNames"] = Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["segments"]) || array_key_exists("segments", $context) ? $context["segments"] : (function () { throw new RuntimeError('Variable "segments" does not exist.', 90, $this->source); })()), "toArray", [], "any", false, false, false, 90), function ($__segment__) use ($context, $macros) { $context["segment"] = $__segment__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["segment"]) || array_key_exists("segment", $context) ? $context["segment"] : (function () { throw new RuntimeError('Variable "segment" does not exist.', 90, $this->source); })()), "getName", [], "any", false, false, false, 90); });
            // line 91
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["segmentNames"]) || array_key_exists("segmentNames", $context) ? $context["segmentNames"] : (function () { throw new RuntimeError('Variable "segmentNames" does not exist.', 91, $this->source); })()), ", "), "html", null, true);
            yield "
                                        </td>
                                    </tr>
                                ";
        }
        // line 95
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <!--/ sms detail collapseable toggler -->
        <div>
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#sms-details\">
                        <span class=\"caret\"></span> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
            </div>
            <!-- some stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"col-md-3 va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"ri-line-chart-fill\"></span>
                                        ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
        yield "
                                    </h5>
                                </div>
                                <div class=\"col-md-9 va-m\">";
        // line 123
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 123, $this->source); })()), "class" => "pull-right"]);
        // line 124
        yield "</div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 127
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 127, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 128
        yield "</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 135
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs nav-tabs-contained\">
                <li class=\"active\">
                    <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        yield "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "
                    </a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">";
        // line 156
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 157
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 157, $this->source); })()), "entity" =>         // line 158
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 158, $this->source); })()), "channel" => "sms"]);
        // line 161
        yield "</div>

            <div class=\"tab-pane fade in bdr-w-0 page-list\" id=\"contacts-container\">
                ";
        // line 164
        yield (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 164, $this->source); })());
        yield "
            </div>
        </div>
        <!-- end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- activity feed -->";
        // line 174
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 174, $this->source); })())]);
        // line 175
        yield "</div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 177, $this->source); })()), "getId", [], "method", false, false, false, 177), "html", null, true);
        yield "\" />
</div>
<!--/ end: box layout -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSms/Sms/details.html.twig";
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
        return array (  305 => 177,  301 => 175,  299 => 174,  287 => 164,  282 => 161,  280 => 158,  279 => 157,  278 => 156,  266 => 146,  258 => 141,  249 => 135,  240 => 128,  238 => 127,  234 => 124,  232 => 123,  226 => 119,  210 => 106,  197 => 95,  189 => 91,  186 => 90,  184 => 89,  179 => 87,  176 => 86,  174 => 85,  172 => 84,  159 => 72,  152 => 71,  147 => 63,  144 => 62,  142 => 59,  141 => 57,  140 => 54,  138 => 52,  137 => 51,  136 => 50,  129 => 49,  124 => 41,  123 => 40,  122 => 39,  121 => 37,  120 => 35,  119 => 34,  118 => 33,  117 => 30,  116 => 29,  115 => 27,  112 => 26,  105 => 25,  100 => 16,  99 => 15,  98 => 14,  97 => 11,  96 => 9,  89 => 8,  78 => 6,  67 => 5,  62 => 2,  59 => 68,  57 => 67,  55 => 66,  52 => 1,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSms/Sms/details.html.twig", "/app/docroot/app/bundles/SmsBundle/Resources/views/Sms/details.html.twig");
    }
}
