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

/* @MauticDynamicContent/DynamicContent/_list.html.twig */
class __TwigTemplate_b593924c51fbb83fc9b15873fb06787d extends Template
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
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover dwctable-list\" id=\"dwcTable\">
            <thead>
            <tr>
                ";
            // line 17
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#dwcTable", "routeBase" => "dynamicContent", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "dynamiccontent:dynamiccontents:deleteown", [], "array", false, false, false, 22) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "dynamiccontent:dynamiccontents:deleteother", [], "array", false, false, false, 22))]]);
            // line 24
            yield "

                ";
            // line 26
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-dwc-name", "default" => true]);
            // line 32
            yield "

                ";
            // line 34
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.slotName", "text" => "mautic.dynamicContent.label.slot_name", "class" => "col-dwc-slotname visible-md visible-lg"]);
            // line 39
            yield "

                ";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "col-dwc-category visible-md visible-lg"]);
            // line 46
            yield "

                ";
            // line 48
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "col-dwc-id visible-md visible-lg"]);
            // line 53
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 57, $this->source); })()));
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
                // line 58
                yield "                <tr>
                    <td>
                        ";
                // line 60
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 61
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 63
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "dynamiccontent:dynamiccontents:editown", [], "array", false, false, false, 63), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "dynamiccontent:dynamiccontents:editother", [], "array", false, false, false, 63), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 63)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 64
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 64, $this->source); })()), "dynamiccontent:dynamiccontents:create", [], "array", false, false, false, 64), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 65
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 65, $this->source); })()), "dynamiccontent:dynamiccontents:deleteown", [], "array", false, false, false, 65), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 65, $this->source); })()), "dynamiccontent:dynamiccontents:deleteother", [], "array", false, false, false, 65), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 65))], "routeBase" => "dynamicContent", "nameGetter" => "getName"]);
                // line 69
                yield "
                    </td>
                    <td>
                        ";
                // line 72
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "dynamicContent"]);
                yield "
                        <a href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            ";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 74), "html", null, true);
                yield "
                            ";
                // line 75
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVariant", [], "any", false, false, false, 75) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isTranslation", [], "any", false, false, false, 75)) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isCampaignBased", [], "any", false, false, false, 75))) {
                    // line 76
                    yield "                                <span>
                                  ";
                    // line 77
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVariant", [], "any", false, false, false, 77)) {
                        // line 78
                        yield "                                    <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                        yield "\"><i class=\"ri-fw ri-organization-chart\"></i></span>
                                    ";
                    }
                    // line 80
                    yield "                                  ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isTranslation", [], "any", false, false, false, 80)) {
                        // line 81
                        yield "                                    <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                        yield "\"><i class=\"ri-fw ri-translate\"></i></span>
                                ";
                    }
                    // line 83
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isCampaignBased", [], "any", false, false, false, 83)) {
                        // line 84
                        yield "                                    <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dwc.form.is.campaign.tooltip"), "html", null, true);
                        yield "\"><i class=\"ri-fw ri-megaphone-line\"></i></span>
                                  ";
                    }
                    // line 86
                    yield "                                 </span>
                            ";
                }
                // line 88
                yield "                        </a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slotName", [], "any", false, false, false, 90), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 92
                $context["catName"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 92))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 92), "title", [], "any", false, false, false, 92)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 93
                yield "                        ";
                $context["color"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 93))) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 93), "color", [], "any", false, false, false, 93))) : (""));
                // line 94
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 94, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 94, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 96), "html", null, true);
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
            // line 99
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 102
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 103
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 103, $this->source); })())), "page" =>             // line 104
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 104, $this->source); })()), "limit" =>             // line 105
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 105, $this->source); })()), "menuLinkId" => "mautic_dynamicContent_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dynamicContent_index"), "sessionVar" => "dynamicContent"]);
            // line 109
            yield "
        </div>
    </div>
";
        } else {
            // line 113
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
        return "@MauticDynamicContent/DynamicContent/_list.html.twig";
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
        return array (  217 => 113,  211 => 109,  209 => 105,  208 => 104,  207 => 103,  206 => 102,  201 => 99,  184 => 96,  176 => 94,  173 => 93,  171 => 92,  166 => 90,  162 => 88,  158 => 86,  152 => 84,  149 => 83,  143 => 81,  140 => 80,  134 => 78,  132 => 77,  129 => 76,  127 => 75,  123 => 74,  119 => 73,  115 => 72,  110 => 69,  108 => 65,  107 => 64,  106 => 63,  105 => 61,  104 => 60,  100 => 58,  83 => 57,  77 => 53,  75 => 48,  71 => 46,  69 => 41,  65 => 39,  63 => 34,  59 => 32,  57 => 26,  53 => 24,  51 => 22,  50 => 17,  44 => 13,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/_list.html.twig", "/app/docroot/app/bundles/DynamicContentBundle/Resources/views/DynamicContent/_list.html.twig");
    }
}
