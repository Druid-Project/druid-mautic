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

/* @MauticNotification/Notification/details.html.twig */
class __TwigTemplate_6b4a0a6eabbe683f279e911c242a2dee extends Template
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
        // line 12
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticNotification/Notification/details.html.twig", 12);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "notification";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 21
(isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 21, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "notification:notifications:viewown", [], "array", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "notification:notifications:viewother", [], "array", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 23, $this->source); })()), "createdBy", [], "any", false, false, false, 23))], "routeBase" => "notification", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.notifications")]);
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 33
(isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 33, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "notification:notifications:editown", [], "array", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "notification:notifications:editother", [], "array", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 35, $this->source); })()), "createdBy", [], "any", false, false, false, 35)), "delete" => CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 36, $this->source); })()), "notification:notifications:create", [], "array", false, false, false, 36)], "routeBase" => "notification"]);
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 43, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- notification detail collapseable -->
            <div class=\"collapse pr-md pl-md\" id=\"notification-details\">
              <div class=\"pr-md pl-md pb-md\">
                <div class=\"panel shd-none mb-0\">
                  <table class=\"table table-hover mb-0\">
                    <tbody>
                      ";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 58, $this->source); })())]);
        yield "
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/ notification detail collapseable -->

            <!-- notification detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#notification-details\">
                      <span class=\"caret\"></span>
                      ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
            </div>
            <!--/ notification detail collapseable toggler -->

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
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
        yield "
                                    </h5>
                                </div>
                                <div class=\"col-md-9 va-m\">
                                    ";
        // line 90
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 90, $this->source); })()), "class" => "pull-right"], false);
        yield "
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
        // line 94
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 94, $this->source); })()), "chartType" => "line", "chartHeight" => 300], false);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 102
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs nav-tabs-contained\">
                <li class=\"active\">
                    <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        yield "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "
                    </a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">
                ";
        // line 123
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 124
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 124, $this->source); })()), "entity" =>         // line 125
(isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 125, $this->source); })()), "channel" => "notification"]);
        // line 127
        yield "
            </div>
            <div class=\"tab-pane fade in bdr-w-0 page-list\" id=\"contacts-container\">
                ";
        // line 130
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 130, $this->source); })()));
        yield "
            </div>
        </div>
        <!--/ tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- activity feed -->
        ";
        // line 140
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 140, $this->source); })())]);
        yield "
    </div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143));
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
        return "@MauticNotification/Notification/details.html.twig";
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
        return array (  262 => 143,  256 => 140,  243 => 130,  238 => 127,  236 => 125,  235 => 124,  234 => 123,  221 => 113,  213 => 108,  204 => 102,  193 => 94,  186 => 90,  179 => 86,  161 => 71,  155 => 68,  142 => 58,  129 => 47,  122 => 46,  114 => 43,  107 => 42,  102 => 36,  101 => 35,  100 => 33,  99 => 32,  92 => 31,  87 => 23,  86 => 21,  85 => 19,  78 => 18,  67 => 16,  56 => 14,  45 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/Notification/details.html.twig", "/app/docroot/app/bundles/NotificationBundle/Resources/views/Notification/details.html.twig");
    }
}
