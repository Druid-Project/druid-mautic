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

/* @MauticPage/Page/_list.html.twig */
class __TwigTemplate_8e0373b4d814e0ff9f57e17fa32f092d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            yield "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover pagetable-list\" id=\"pageTable\">
            <thead>
            <tr>
                ";
            // line 18
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#pageTable", "routeBase" => "page", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 23) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "page:pages:deleteother", [], "array", false, false, false, 23))]]);
            // line 25
            yield "

                ";
            // line 27
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.title", "text" => "mautic.core.title", "class" => "col-page-title"]);
            // line 32
            yield "

                ";
            // line 34
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-page-category"]);
            // line 39
            yield "

                ";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.hits", "text" => "mautic.page.thead.hits", "class" => "col-page-hits visible-md visible-lg"]);
            // line 46
            yield "

                ";
            // line 48
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "col-page-dateAdded visible-md visible-lg"]);
            // line 53
            yield "

                ";
            // line 55
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "col-page-dateModified visible-md visible-lg", "default" => true]);
            // line 61
            yield "

                ";
            // line 63
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.createdByUser", "text" => "mautic.core.createdby", "class" => "col-page-createdByUser visible-md visible-lg"]);
            // line 68
            yield "

                ";
            // line 70
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "submission_count", "text" => "mautic.form.form.results", "class" => "visible-md visible-lg col-page-submissions"]);
            // line 75
            yield "

                ";
            // line 77
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.id", "text" => "mautic.core.id", "class" => "col-page-id visible-md visible-lg"]);
            // line 82
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 86, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 87
                yield "                ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, $context["i"], 0, [], "array", false, false, false, 87);
                // line 88
                yield "                <tr>
                    <td>
                        ";
                // line 90
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 91
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 93
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "page:pages:editown", [], "array", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "page:pages:editother", [], "array", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 93, $this->source); })()), "createdBy", [], "any", false, false, false, 93)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 94
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 94, $this->source); })()), "page:pages:create", [], "array", false, false, false, 94), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 95
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 95), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "page:pages:deleteother", [], "array", false, false, false, 95), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "createdBy", [], "any", false, false, false, 95))], "routeBase" => "page", "nameGetter" => "getTitle"]);
                // line 99
                yield "
                    </td>
                    <td>
                        ";
                // line 102
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 102, $this->source); })()), "model" => "page.page"]);
                yield "
                        <a href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "title", [], "any", false, false, false, 104), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "alias", [], "any", false, false, false, 104), "html", null, true);
                yield ")
                            ";
                // line 105
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isVariant", [], "any", false, false, false, 105) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isTranslation", [], "any", false, false, false, 105)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 105))) {
                    // line 106
                    yield "                                <span>
                                    ";
                    // line 107
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 107, $this->source); })()), "isVariant", [], "any", false, false, false, 107)) {
                        // line 108
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                        yield "\">
                                            <i class=\"ri-fw ri-organization-chart\"></i>
                                        </span>
                                    ";
                    }
                    // line 112
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 112, $this->source); })()), "isTranslation", [], "any", false, false, false, 112)) {
                        // line 113
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                        yield "\">
                                            <i class=\"ri-fw ri-translate\"></i>
                                        </span>
                                    ";
                    }
                    // line 117
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 117)) {
                        // line 118
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.preference_center"), "html", null, true);
                        yield "\">
                                            <i class=\"ri-settings-5-line\"></i>
                                        </span>
                                    ";
                    }
                    // line 122
                    yield "                                </span>
                            ";
                }
                // line 124
                yield "                        </a>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 127
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 127, $this->source); })()), "category", [], "any", false, false, false, 127);
                // line 128
                yield "                        ";
                $context["catName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 128), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 129
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 129, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 129, $this->source); })()), "color", [], "any", false, false, false, 129))) : (""));
                // line 130
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 130, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 130, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 132, $this->source); })()), "hits", [], "any", false, false, false, 132), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 133
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 133, $this->source); })()), "dateAdded", [], "any", false, false, false, 133)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 133, $this->source); })()), "dateAdded", [], "any", false, false, false, 133));
                }
                yield "\">
                        ";
                // line 134
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "dateAdded", [], "any", false, false, false, 134)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "dateAdded", [], "any", false, false, false, 134));
                }
                // line 135
                yield "                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 136
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "dateModified", [], "any", false, false, false, 136)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "dateModified", [], "any", false, false, false, 136));
                }
                yield "\">
                        ";
                // line 137
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "dateModified", [], "any", false, false, false, 137)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "dateModified", [], "any", false, false, false, 137));
                }
                // line 138
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 139, $this->source); })()), "createdByUser", [], "any", false, false, false, 139), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        <a href=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_results", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)]), "html", null, true);
                yield "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\" size=\"sm\" class=\"label label-gray\" ";
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 141))) {
                    yield "disabled=\"disabled\"";
                }
                yield ">";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.viewresults", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 142)]), "html", null, true);
                // line 143
                yield "</a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 151
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 152
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 152, $this->source); })())), "page" =>             // line 153
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 153, $this->source); })()), "limit" =>             // line 154
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 154, $this->source); })()), "menuLinkId" => "mautic_page_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_index"), "sessionVar" => "page"]);
            // line 158
            yield "
        </div>
    </div>
";
        } else {
            // line 162
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
        return "@MauticPage/Page/_list.html.twig";
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
        return array (  299 => 162,  293 => 158,  291 => 154,  290 => 153,  289 => 152,  288 => 151,  283 => 148,  266 => 145,  262 => 143,  260 => 142,  253 => 141,  248 => 139,  245 => 138,  241 => 137,  235 => 136,  232 => 135,  228 => 134,  222 => 133,  218 => 132,  210 => 130,  207 => 129,  204 => 128,  202 => 127,  197 => 124,  193 => 122,  185 => 118,  182 => 117,  174 => 113,  171 => 112,  163 => 108,  161 => 107,  158 => 106,  156 => 105,  150 => 104,  146 => 103,  142 => 102,  137 => 99,  135 => 95,  134 => 94,  133 => 93,  132 => 91,  131 => 90,  127 => 88,  124 => 87,  107 => 86,  101 => 82,  99 => 77,  95 => 75,  93 => 70,  89 => 68,  87 => 63,  83 => 61,  81 => 55,  77 => 53,  75 => 48,  71 => 46,  69 => 41,  65 => 39,  63 => 34,  59 => 32,  57 => 27,  53 => 25,  51 => 23,  50 => 18,  44 => 14,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Page/_list.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/Page/_list.html.twig");
    }
}
