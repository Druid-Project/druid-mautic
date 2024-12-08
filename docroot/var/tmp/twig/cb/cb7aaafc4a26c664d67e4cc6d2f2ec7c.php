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

/* @MauticAsset/Asset/details.html.twig */
class __TwigTemplate_477c83b5c0c93be5caec6f02ef2e159a extends Template
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
            'indexButton' => [$this, 'block_indexButton'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticAsset/Asset/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "asset";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 7
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 7, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "asset:assets:viewown", [], "array", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "asset:assets:viewother", [], "array", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 12, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 12))], "routeBase" => "asset", "langVar" => "asset.asset", "nameGetter" => "getTitle", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.assets")]);
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 23, $this->source); })()), "getTitle", [], "method", false, false, false, 23), "html", null, true);
        yield " ";
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 28
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 28, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), "asset:assets:editown", [], "array", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 32, $this->source); })()), "asset:assets:editother", [], "array", false, false, false, 32), CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 33, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 33)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "asset:assets:create", [], "array", false, false, false, 35), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 37, $this->source); })()), "asset:assets:deleteown", [], "array", false, false, false, 37), CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 38, $this->source); })()), "asset:assets:deleteother", [], "array", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 39, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 39))], "routeBase" => "asset", "langVar" => "asset.asset", "nameGetter" => "getTitle"]);
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" =>         // line 50
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 50, $this->source); })()), "status" => "available"]);
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- asset detail header -->
            ";
        // line 62
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticAsset/Asset/details.html.twig", 62)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62)]));
        // line 63
        yield "            <!--/ asset detail header -->
            <!-- asset detail collapseable -->
            <div class=\"collapse pr-md pl-md\" id=\"asset-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>";
        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" =>         // line 72
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 72, $this->source); })())]);
        // line 74
        yield "<tr>
                                <td width=\"20%\">
                                <span class=\"fw-b textTitle\">
                                ";
        // line 77
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.asset.size", [], "messages");
        // line 78
        yield "                                </span>
                                </td>
                                <td>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 80, $this->source); })()), "getSize", [], "method", false, false, false, 80), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 83
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.asset.path.relative", [], "messages");
        yield "</span></td>
                                <td>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 87
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.filename.original", [], "messages");
        yield "</span></td>
                                <td>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 88, $this->source); })()), "getOriginalFilename", [], "method", false, false, false, 88), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                ";
        // line 91
        $context["location"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 91, $this->source); })()), "getStorageLocation", [], "method", false, false, false, 91);
        // line 92
        yield "                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.asset.filename." . (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 92, $this->source); })()))), "html", null, true);
        yield "</span></td>
                                <td>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("local" == (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 93, $this->source); })()))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 93, $this->source); })()), "getPath", [], "method", false, false, false, 93)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 93, $this->source); })()), "getRemotePath", [], "method", false, false, false, 93))), "html", null, true);
        yield "</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ asset detail collapseable -->
        </div>

        <div>
            <!-- asset detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#asset-details\"><span class=\"caret\"></span> ";
        // line 108
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        yield "</a>
                </span>
            </div>
            <!--/ asset detail collapseable toggler -->

            <!-- some stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"col-md-2 va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"ri-download-line\"></span>
                                        ";
        // line 122
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.graph.line.downloads", [], "messages");
        // line 123
        yield "                                    </h5>
                                </div>
                                <div class=\"col-md-2 va-m text-center\">
                                    <span class=\"text-white dark-md fw-sb mb-xs\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.downloads.total", ["count" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 126, $this->source); })()), "downloads", [], "any", false, false, false, 126), "total", [], "any", false, false, false, 126)]), "html", null, true);
        yield "</span>
                                    <span class=\"text-white dark-md fw-sb mb-xs\">|</span>
                                    <span class=\"text-white dark-md fw-sb mb-xs\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.downloads.unique", ["count" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 128, $this->source); })()), "downloads", [], "any", false, false, false, 128), "unique", [], "any", false, false, false, 128)]), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"col-md-8 va-m\">";
        // line 131
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 131, $this->source); })()), "class" => "pull-right"]);
        // line 132
        yield "</div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 135
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 135, $this->source); })()), "downloads", [], "any", false, false, false, 135), "timeStats", [], "any", false, false, false, 135), "chartType" => "line", "chartHeight" => 300]);
        // line 136
        yield "</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->
        </div>

        ";
        // line 144
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md preview-detail\">";
        // line 148
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticAsset/Asset/preview.html.twig", ["activeAsset" =>         // line 150
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 150, $this->source); })()), "assetDownloadUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 153
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 153, $this->source); })()), "getId", [], "method", false, false, false, 153)])]);
        // line 155
        yield "</div>
        <!--/ end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- preview URL -->
        <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 165
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.asset.url", [], "messages");
        yield "</div>
            </div>
            <div class=\"panel-body pt-xs\">
                <div class=\"input-group\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\"
                           readonly value=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 170, $this->source); })()));
        yield "\"/>
                <span class=\"input-group-btn\">
                    ";
        // line 172
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticAsset/Asset/details.html.twig", 172)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["icon" => "ri-external-link-line", "icon_only" => true, "tooltip_placement" => "left", "label" => "mautic.core.open_link", "onclick" => (("window.open('" .         // line 179
(isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 179, $this->source); })())) . "', '_blank')"), "variant" => "ghost"]]]));
        // line 184
        yield "                </span>
                </div>
            </div>
        </div>
        <!--/ preview URL -->

        <hr class=\"hr-w-2\" style=\"width:50%\">

        <!-- activity feed -->";
        // line 193
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 193, $this->source); })())]);
        // line 194
        yield "</div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 196, $this->source); })()), "getId", [], "method", false, false, false, 196), "html", null, true);
        yield "\"/>
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
        return "@MauticAsset/Asset/details.html.twig";
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
        return array (  326 => 196,  322 => 194,  320 => 193,  310 => 184,  308 => 179,  307 => 172,  302 => 170,  294 => 165,  282 => 155,  280 => 153,  279 => 150,  278 => 148,  272 => 144,  262 => 136,  260 => 135,  256 => 132,  254 => 131,  249 => 128,  244 => 126,  239 => 123,  237 => 122,  220 => 108,  202 => 93,  197 => 92,  195 => 91,  189 => 88,  185 => 87,  179 => 84,  175 => 83,  169 => 80,  165 => 78,  163 => 77,  158 => 74,  156 => 72,  155 => 70,  147 => 63,  145 => 62,  136 => 55,  129 => 54,  124 => 50,  123 => 49,  116 => 48,  111 => 39,  110 => 38,  109 => 37,  108 => 35,  107 => 33,  106 => 32,  105 => 31,  104 => 28,  103 => 26,  96 => 25,  83 => 23,  78 => 12,  77 => 11,  76 => 10,  75 => 7,  74 => 5,  67 => 4,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/Asset/details.html.twig", "/app/docroot/app/bundles/AssetBundle/Resources/views/Asset/details.html.twig");
    }
}
