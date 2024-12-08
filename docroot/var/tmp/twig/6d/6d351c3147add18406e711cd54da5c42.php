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

/* @Marketplace/Package/detail.html.twig */
class __TwigTemplate_eaa3c2c7bb9fe47872ec32b7ddb6b394 extends Template
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
            'indexButton' => [$this, 'block_indexButton'],
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
        // line 4
        $context["latestVersion"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 4, $this->source); })()), "versions", [], "any", false, false, false, 4), "findLatestStableVersionPackage", [], "method", false, false, false, 4);
        // line 6
        if ( !(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 6, $this->source); })())) {
            // line 7
            $context["latestVersion"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 7, $this->source); })()), "versions", [], "any", false, false, false, 7), "findLatestVersionPackage", [], "method", false, false, false, 7);
        }
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@Marketplace/Package/detail.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 2, $this->source); })()), "packageBase", [], "any", false, false, false, 2), "getHumanPackageName", [], "method", false, false, false, 2));
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
        yield "    ";
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@Marketplace/Package/detail.html.twig", 11)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close_back", ["%target%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.marketplace.marketplace")]), "size" => "xs", "variant" => "tertiary", "icon" => "ri-arrow-left-line", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST")), "attributes" => ["data-toggle" => "ajax", "class" => "btn-back mb-lg"]]]]));
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        $context["buttons"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST")), "class" => "btn btn-tertiary"], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.details.close"), "iconClass" => "ri-arrow-go-back-line", "primary" => true]];
        // line 40
        yield " ";
        if (((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 40, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 40, $this->source); })()), "issues", [], "any", false, false, false, 40))) {
            // line 41
            yield " ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 41, $this->source); })()), [["attr" => ["href" => CoreExtension::getAttribute($this->env, $this->source,             // line 43
(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 43, $this->source); })()), "issues", [], "any", false, false, false, 43), "target" => "_blank", "rel" => "noopener noreferrer", "data-toggle" => ""], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.issue.tracker"), "iconClass" => "ri-question-mark", "primary" => false]]);
        }
        // line 53
        yield "
";
        // line 54
        if (((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 54, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 54, $this->source); })()), "wiki", [], "any", false, false, false, 54))) {
            // line 55
            yield " ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 55, $this->source); })()), [["attr" => ["href" => CoreExtension::getAttribute($this->env, $this->source,             // line 57
(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 57, $this->source); })()), "wiki", [], "any", false, false, false, 57), "target" => "_blank", "rel" => "noopener noreferrer", "data-toggle" => ""], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.wiki"), "iconClass" => "ri-book-line", "primary" => false]]);
        }
        // line 67
        yield "
";
        // line 68
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 68, $this->source); })()), "isGranted", [Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions::CAN_INSTALL_PACKAGES")], "method", false, false, false, 68) &&  !(isset($context["isInstalled"]) || array_key_exists("isInstalled", $context) ? $context["isInstalled"] : (function () { throw new RuntimeError('Variable "isInstalled" does not exist.', 68, $this->source); })())) && (isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 68, $this->source); })()))) {
            // line 69
            yield "    ";
            $context["installRoute"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_INSTALL"), ["vendor" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 71
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 71, $this->source); })()), "packageBase", [], "any", false, false, false, 71), "getVendorName", [], "method", false, false, false, 71), "package" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 72
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 72, $this->source); })()), "packageBase", [], "any", false, false, false, 72), "getPackageName", [], "method", false, false, false, 72)]);
            // line 75
            yield "
    ";
            // line 76
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 76, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#InstallationInProgressModal", "href" =>             // line 80
(isset($context["installRoute"]) || array_key_exists("installRoute", $context) ? $context["installRoute"] : (function () { throw new RuntimeError('Variable "installRoute" does not exist.', 80, $this->source); })())], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.install"), "iconClass" => "ri-download-line", "primary" => true]]);
            // line 86
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 87, $this->source); })()), "isGranted", [Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions::CAN_INSTALL_PACKAGES")], "method", false, false, false, 87) && (isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 87, $this->source); })()))) {
            // line 88
            yield "    ";
            $context["removeRoute"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_REMOVE"), ["vendor" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 89
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 89, $this->source); })()), "packageBase", [], "any", false, false, false, 89), "getVendorName", [], "method", false, false, false, 89), "package" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 90
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 90, $this->source); })()), "packageBase", [], "any", false, false, false, 90), "getPackageName", [], "method", false, false, false, 90)]);
            // line 92
            yield "
    ";
            // line 93
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 93, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#RemovalInProgressModal", "href" =>             // line 97
(isset($context["removeRoute"]) || array_key_exists("removeRoute", $context) ? $context["removeRoute"] : (function () { throw new RuntimeError('Variable "removeRoute" does not exist.', 97, $this->source); })())], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove"), "iconClass" => "ri-delete-bin-line", "primary" => true]]);
        }
        // line 104
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" =>         // line 105
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 105, $this->source); })())]);
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "<div class=\"col-md-9\">
    ";
        // line 111
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 111, $this->source); })()), "packageBase", [], "any", false, false, false, 111), "description", [], "any", false, false, false, 111)) {
            // line 112
            yield "    <div>
        <div class=\"pr-md pl-md pt-lg pb-lg\">
            <div class=\"box-layout\">
                <div class=\"col-xs-10\">
                    <div class=\"text-muted\">";
            // line 116
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 116, $this->source); })()), "packageBase", [], "any", false, false, false, 116), "description", [], "any", false, false, false, 116));
            yield "</div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 122
        yield "
    <div class=\"panel\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
        // line 125
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.cli.install", [], "messages");
        yield "</div>
        </div>
        <div class=\"panel-body\">";
        // line 127
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.cli.install.descr", ["%vendor%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 128
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 128, $this->source); })()), "packageBase", [], "any", false, false, false, 128), "getVendorName", [], "method", false, false, false, 128), "%package%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 129
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 129, $this->source); })()), "packageBase", [], "any", false, false, false, 129), "getPackageName", [], "method", false, false, false, 129)]));
        // line 130
        yield "</div>
    </div>

    <div class=\"panel\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 135
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.latest.stable.version", [], "messages");
        yield "</div>
    </div>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 139
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version", [], "messages");
        yield "</th>
            <td>
                ";
        // line 141
        if ( !(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 141, $this->source); })())) {
            // line 142
            yield "                    <div class=\"text-danger\">
                        ";
            // line 143
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.latest.version.missing", [], "messages");
            // line 144
            yield "                    </div>
                ";
        } else {
            // line 146
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 146, $this->source); })()), "packageBase", [], "any", false, false, false, 146), "repository", [], "any", false, false, false, 146));
            yield "/releases/tag/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 146, $this->source); })()), "version", [], "any", false, false, false, 146));
            yield "\" id=\"latest-version\" target=\"_blank\" rel=\"noopener noreferrer\">
                        <strong>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 147, $this->source); })()), "version", [], "any", false, false, false, 147), "html", null, true);
            yield "</strong>
                    </a>
                ";
        }
        // line 150
        yield "            </td>
        </tr>
        ";
        // line 152
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 152, $this->source); })()))) {
            // line 153
            yield "            <tr>
                <th>";
            // line 154
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version.release.date", [], "messages");
            yield "</th>
                <td title=\"";
            // line 155
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 155, $this->source); })()), "time", [], "any", false, false, false, 155));
            yield "\">
                    ";
            // line 156
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 156, $this->source); })()), "time", [], "any", false, false, false, 156));
            yield "
                </td>
            </tr>
            <tr>
                <th>";
            // line 160
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.license", [], "messages");
            yield "</th>
                <td>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 161, $this->source); })()), "license", [], "any", false, false, false, 161), ", "));
            yield "</td>
            </tr>
            ";
            // line 163
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 163, $this->source); })()), "homepage", [], "any", false, false, false, 163)) {
                // line 164
                yield "                <tr>
                    <th>";
                // line 165
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.homepage", [], "messages");
                yield "</th>
                    <td>";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 166, $this->source); })()), "homepage", [], "any", false, false, false, 166));
                yield "</td>
                </tr>
            ";
            }
            // line 169
            yield "            <tr>
                <th>
                    ";
            // line 171
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.required.packages", [], "messages");
            // line 172
            yield "                    (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 172, $this->source); })()), "require", [], "any", false, false, false, 172)), "html", null, true);
            yield ")
                </th>
                <td>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 174, $this->source); })()), "require", [], "any", false, false, false, 174)), ", "));
            yield "</td>
            </tr>
        ";
        }
        // line 177
        yield "    </table>
    </div>

    <div class=\"panel\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 182
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.all.versions", [], "messages");
        yield "</div>
    </div>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 186
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version", [], "messages");
        yield "</th>
            <th>";
        // line 187
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version.release.date", [], "messages");
        yield "</th>
        </tr>
        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 189, $this->source); })()), "versions", [], "any", false, false, false, 189), "sortByLatest", [], "method", false, false, false, 189));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 190
            yield "        <tr>
            <td>
                ";
            // line 192
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["version"], "isStable", [], "method", false, false, false, 192) || CoreExtension::getAttribute($this->env, $this->source, $context["version"], "isPreRelease", [], "method", false, false, false, 192))) {
                // line 193
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 193, $this->source); })()), "packageBase", [], "any", false, false, false, 193), "repository", [], "any", false, false, false, 193));
                yield "/releases/tag/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 193));
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
                // line 194
                if (CoreExtension::getAttribute($this->env, $this->source, $context["version"], "isStable", [], "method", false, false, false, 194)) {
                    // line 195
                    yield "                        <b>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 195));
                    yield "</b>
                    ";
                } else {
                    // line 197
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 197));
                    yield "
                    ";
                }
                // line 199
                yield "                    </a>
                ";
            } else {
                // line 201
                yield "                    <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 201));
                yield "</i>
                ";
            }
            // line 203
            yield "            </td>
            <td title=\"";
            // line 204
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "time", [], "any", false, false, false, 204));
            yield "\">
                ";
            // line 205
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "time", [], "any", false, false, false, 205));
            yield "
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['version'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "    </table>
    </div>
</div>

<div class=\"col-md-3 panel pb-lg\">
    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 214
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.maintainers", [], "messages");
        yield "</h3>
    ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 215, $this->source); })()), "maintainers", [], "any", false, false, false, 215));
        foreach ($context['_seq'] as $context["_key"] => $context["maintainer"]) {
            // line 216
            yield "        <div class=\"box-layout\">
            <div class=\"col-xs-3 va-m\">
                <div class=\"panel-body\">
                    <span class=\"img-wrapper img-rounded\">
                        <img class=\"img\" src=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintainer"], "avatar", [], "any", false, false, false, 220));
            yield "\">
                    </span>
                </div>
            </div>
            <div class=\"col-xs-9 va-t\">
                <div class=\"panel-body\">
                    <h4 class=\"fw-sb mb-xs ellipsis\">
                        ";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 227)));
            yield "
                    </h4>
                    <a href=\"https://packagist.org/packages/";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 229));
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                        ";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.other.packages", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 230)]), "html", null, true);
            yield "
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['maintainer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        yield "
    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 237
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.info", [], "messages");
        yield "</h3>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 240
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.repository", [], "messages");
        yield "</th>
            <td>
                <a href=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 242, $this->source); })()), "packageBase", [], "any", false, false, false, 242), "repository", [], "any", false, false, false, 242));
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 243, $this->source); })()), "packageBase", [], "any", false, false, false, 243), "name", [], "any", false, false, false, 243));
        yield "
                </a>
            </td>
        </tr>
        <tr>
            <th>";
        // line 248
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.stars", [], "messages");
        yield "</th>
            <td>";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 249, $this->source); })()), "githubInfo", [], "any", false, false, false, 249), "stars", [], "any", false, false, false, 249));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 252
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.watchers", [], "messages");
        yield "</th>
            <td>";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 253, $this->source); })()), "githubInfo", [], "any", false, false, false, 253), "watchers", [], "any", false, false, false, 253));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 256
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.forks", [], "messages");
        yield "</th>
            <td>";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 257, $this->source); })()), "githubInfo", [], "any", false, false, false, 257), "forks", [], "any", false, false, false, 257));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 260
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.open.issues", [], "messages");
        yield "</th>
            <td>";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 261, $this->source); })()), "githubInfo", [], "any", false, false, false, 261), "openIssues", [], "any", false, false, false, 261));
        yield "</td>
        </tr>
    </table>

    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 265
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.packagist.info", [], "messages");
        yield "</h3>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 268
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.repository", [], "messages");
        yield "</th>
            <td>
                <a href=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 270, $this->source); })()), "packageBase", [], "any", false, false, false, 270), "url", [], "any", false, false, false, 270));
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 271, $this->source); })()), "packageBase", [], "any", false, false, false, 271), "name", [], "any", false, false, false, 271));
        yield "
                </a>
            </td>
        </tr>
        <tr>
            <th>";
        // line 276
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.total.downloads", [], "messages");
        yield "</th>
            <td>";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 277, $this->source); })()), "packageBase", [], "any", false, false, false, 277), "downloads", [], "any", false, false, false, 277));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 280
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.monthly.downloads", [], "messages");
        yield "</th>
            <td>";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 281, $this->source); })()), "monthlyDownloads", [], "any", false, false, false, 281));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 284
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.daily.downloads", [], "messages");
        yield "</th>
            <td>";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 285, $this->source); })()), "dailyDownloads", [], "any", false, false, false, 285));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 288
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.create.date", [], "messages");
        yield "</th>
            <td title=\"";
        // line 289
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 289, $this->source); })()), "time", [], "any", false, false, false, 289));
        yield "\">
                ";
        // line 290
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 290, $this->source); })()), "time", [], "any", false, false, false, 290));
        yield "
            </td>
        </tr>
    </table>
</div>";
        // line 296
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "InstallationInProgressModal", "header" => ("Installing " . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 298
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 298, $this->source); })()), "packageBase", [], "any", false, false, false, 298), "getHumanPackageName", [], "method", false, false, false, 298))), "size" => "md", "footerButtons" => false]);
        // line 303
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "RemovalInProgressModal", "header" => ("Removing " . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 305
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 305, $this->source); })()), "packageBase", [], "any", false, false, false, 305), "getHumanPackageName", [], "method", false, false, false, 305))), "size" => "md", "footerButtons" => false]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Marketplace/Package/detail.html.twig";
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
        return array (  574 => 305,  573 => 303,  571 => 298,  570 => 296,  563 => 290,  559 => 289,  555 => 288,  549 => 285,  545 => 284,  539 => 281,  535 => 280,  529 => 277,  525 => 276,  517 => 271,  513 => 270,  508 => 268,  502 => 265,  495 => 261,  491 => 260,  485 => 257,  481 => 256,  475 => 253,  471 => 252,  465 => 249,  461 => 248,  453 => 243,  449 => 242,  444 => 240,  438 => 237,  435 => 236,  423 => 230,  419 => 229,  414 => 227,  404 => 220,  398 => 216,  394 => 215,  390 => 214,  383 => 209,  373 => 205,  369 => 204,  366 => 203,  360 => 201,  356 => 199,  350 => 197,  344 => 195,  342 => 194,  335 => 193,  333 => 192,  329 => 190,  325 => 189,  320 => 187,  316 => 186,  309 => 182,  302 => 177,  296 => 174,  290 => 172,  288 => 171,  284 => 169,  278 => 166,  274 => 165,  271 => 164,  269 => 163,  264 => 161,  260 => 160,  253 => 156,  249 => 155,  245 => 154,  242 => 153,  240 => 152,  236 => 150,  230 => 147,  223 => 146,  219 => 144,  217 => 143,  214 => 142,  212 => 141,  207 => 139,  200 => 135,  193 => 130,  191 => 129,  190 => 128,  189 => 127,  184 => 125,  179 => 122,  170 => 116,  164 => 112,  162 => 111,  159 => 110,  152 => 109,  147 => 105,  146 => 104,  143 => 97,  142 => 93,  139 => 92,  137 => 90,  136 => 89,  134 => 88,  132 => 87,  129 => 86,  127 => 80,  126 => 76,  123 => 75,  121 => 72,  120 => 71,  118 => 69,  116 => 68,  113 => 67,  110 => 57,  108 => 55,  106 => 54,  103 => 53,  100 => 43,  98 => 41,  95 => 40,  93 => 29,  86 => 28,  80 => 11,  73 => 10,  62 => 2,  57 => 1,  54 => 7,  52 => 6,  50 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Marketplace/Package/detail.html.twig", "/app/docroot/app/bundles/MarketplaceBundle/Resources/views/Package/detail.html.twig");
    }
}
