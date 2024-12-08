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

/* @MauticLead/Company/company.html.twig */
class __TwigTemplate_0df6a710dc472e8f39725af46d15aad0 extends Template
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
        // line 13
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Company/company.html.twig", 13);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
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
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 21, $this->source); })()), "routeBase" => "company", "langVar" => "company", "customButtons" => [], "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 26, $this->source); })()), "permissionUser", [], "any", false, false, false, 26))], "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.companies")]);
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $context["canEdit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 34, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 34, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 34, $this->source); })()), "permissionUser", [], "any", false, false, false, 34));
        // line 35
        $context["canMerge"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 35, $this->source); })()), "permissionUser", [], "any", false, false, false, 35));
        // line 36
        $context["canDownload"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 36, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 36, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 36, $this->source); })()), "permissionUser", [], "any", false, false, false, 36));
        // line 37
        $context["buttons"] = [];
        // line 38
        yield "
";
        // line 39
        if (((isset($context["canMerge"]) || array_key_exists("canMerge", $context) ? $context["canMerge"] : (function () { throw new RuntimeError('Variable "canMerge" does not exist.', 39, $this->source); })()) && (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 39, $this->source); })()))) {
            // line 40
            yield "    ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 40, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.header.merge", ["%name%" => CoreExtension::getAttribute($this->env, $this->source,             // line 44
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 44, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 44)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 45
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "objectAction" => "merge"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.merge"), "iconClass" => "ri-exchange-2-line"]]);
        }
        // line 51
        yield "
";
        // line 52
        if ((isset($context["canDownload"]) || array_key_exists("canDownload", $context) ? $context["canDownload"] : (function () { throw new RuntimeError('Variable "canDownload" does not exist.', 52, $this->source); })())) {
            // line 53
            yield "    ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 53, $this->source); })()), [["attr" => ["data-toggle" => "download", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_export_action", ["companyId" => CoreExtension::getAttribute($this->env, $this->source,             // line 56
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "iconClass" => "ri-export-line"]]);
        }
        // line 62
        yield "
  ";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 64
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 64, $this->source); })()), "routeBase" => "company", "langVar" => "company", "customButtons" =>         // line 67
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 67, $this->source); })()), "templateButtons" => ["edit" =>         // line 69
(isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 69, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 70
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 70, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 70, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 70, $this->source); })()), "permissionUser", [], "any", false, false, false, 70))]]);
        // line 72
        yield "
";
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!--/ lead detail header -->

            <!-- lead detail collapseable -->
            <div class=\"collapse pr-md pl-md\" id=\"lead-details\">
                <ul class=\"pt-md nav nav-tabs nav-tabs-contained\" role=\"tablist\">
                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 86, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 87
            yield "                        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 87, $this->source); })()), $context["g"], [], "array", false, false, false, 87))) {
                // line 88
                yield "                            <li class=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 88)) {
                    yield "active";
                }
                yield "\">
                                <a href=\"#";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
                yield "\" class=\"group\" data-toggle=\"tab\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                yield "</a>
                            </li>
                        ";
            }
            // line 92
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 97, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 98
            yield "                        <div class=\"tab-pane fade ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 98)) {
                yield "in active";
            }
            yield " bdr-w-0\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
                            <div class=\"pr-md pl-md pb-md\">
                                <div class=\"panel shd-none mb-0\">
                                    <table class=\"table table-hover mb-0\">
                                        <tbody>
                                        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 103, $this->source); })()), $context["group"], [], "array", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 104
                yield "                                            ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 104))) {
                    // line 105
                    yield "                                                <tr>
                                                    <td width=\"20%\"><span class=\"fw-b\">";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 106), "html", null, true);
                    yield "</span></td>
                                                    <td>
                                                        ";
                    // line 108
                    if (((("core" == $context["group"]) && ("country" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 108))) && array_key_exists("flag", $context))) {
                        // line 109
                        yield "                                                          <img class=\"mr-sm\" src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 109, $this->source); })()), "html", null, true);
                        yield "\" alt=\"\" style=\"max-height: 24px;\"/>
                                                          <span class=\"mt-1\">";
                        // line 110
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 110), "html", null, true);
                        yield "</span>
                                                        ";
                    } else {
                        // line 112
                        yield "                                                          ";
                        if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 112)) && ("multiselect" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 112)))) {
                            // line 113
                            yield "                                                              ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 113), ", "), "html", null, true);
                            yield "
                                                          ";
                        } elseif (("url" == CoreExtension::getAttribute($this->env, $this->source,                         // line 114
$context["field"], "type", [], "any", false, false, false, 114))) {
                            // line 115
                            yield "                                                              <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 115), "html", null, true);
                            yield "\" target=\"_blank\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 115), "html", null, true);
                            yield "</a>
                                                          ";
                        } else {
                            // line 117
                            yield "                                                              ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 117), "html", null, true);
                            yield "
                                                          ";
                        }
                        // line 119
                        yield "                                                        ";
                    }
                    // line 120
                    yield "                                                    </td>
                                                </tr>
                                            ";
                }
                // line 123
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "                </div>
            </div>
            <!--/ lead detail collapseable -->
        </div>

        <div>
            <!-- lead detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#lead-details\">
                       <span class=\"caret\"></span>
                       ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
            </div>
            <!--/ lead detail collapseable toggler -->
        </div>

        <div class=\"pa-md enage\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"panel\">
                        <div class=\"panel-body box-layout\">
                            <div class=\"col-xs-8 va-m\">
                                <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                    ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.engagements"), "html", null, true);
        yield "
                                </h5>
                            </div>
                            <div class=\"col-xs-4 va-t text-right\">
                                <h3 class=\"text-white dark-sm\"><span class=\"ri-eye-line\"></span></h3>
                            </div>
                        </div>
                        ";
        // line 162
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 163
(isset($context["engagementData"]) || array_key_exists("engagementData", $context) ? $context["engagementData"] : (function () { throw new RuntimeError('Variable "engagementData" does not exist.', 163, $this->source); })()), "chartType" => "line", "chartHeight" => 250]);
        // line 166
        yield "
                    </div>
                </div>
            </div>
        </div>
        <!-- contacts section -->
        <div class=\"pa-md enage\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div id=\"contacts-table\">
                        ";
        // line 176
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Company/list_rows_contacts.html.twig", ["contacts" =>         // line 177
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 177, $this->source); })()), "company" =>         // line 178
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 178, $this->source); })()), "tmpl" => "index", "permissions" =>         // line 180
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 180, $this->source); })()), "security" =>         // line 181
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 181, $this->source); })()), "page" =>         // line 182
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 182, $this->source); })()), "limit" =>         // line 183
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "totalItems" =>         // line 184
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 184, $this->source); })())]);
        // line 185
        yield "
                    </div>
                </div>
            </div>
        </div>
        <!--/ contacts section -->

        <!--/ end: tab-content -->
    </div>

    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- form HTML -->
        <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mb-0\">
            <div class=\"mt-sm points-panel text-center\">
                <h1>";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.score.count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 202, $this->source); })()), "score", [], "any", false, false, false, 202)]), "html", null, true);
        yield "</h1>
                <hr/>
            </div>
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.group.company"), "html", null, true);
        yield "</div>
            </div>
            <div class=\"panel-body pt-sm\">
                ";
        // line 209
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 209, $this->source); })()), "owner", [], "any", false, false, false, 209)) {
            // line 210
            yield "                  <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.field.owner"), "html", null, true);
            yield "</h6>
                  <p class=\"text-muted\">";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 211, $this->source); })()), "owner", [], "any", false, false, false, 211), "name", [], "any", false, false, false, 211), "html", null, true);
            yield "</p>
                ";
        }
        // line 213
        yield "
                <h6 class=\"fw-sb\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
        yield "</h6>
                <address class=\"text-muted\">
                    ";
        // line 216
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 216, $this->source); })()), "address1", [], "any", false, false, false, 216))) {
            // line 217
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 217, $this->source); })()), "address1", [], "any", false, false, false, 217), "html", null, true);
            yield "<br>
                    ";
        }
        // line 219
        yield "                    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 219, $this->source); })()), "address2", [], "any", false, false, false, 219))) {
            // line 220
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 220, $this->source); })()), "address2", [], "any", false, false, false, 220), "html", null, true);
            yield "<br>
                    ";
        }
        // line 222
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 222, $this->source); })()), "city", [], "any", false, false, false, 222), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 222, $this->source); })()), "zipcode", [], "any", false, false, false, 222), "html", null, true);
        yield "
                    <br>
                </address>

                <h6 class=\"fw-sb\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.type.email"), "html", null, true);
        yield "</h6>
                <p class=\"text-muted\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 227, $this->source); })()), "email", [], "any", false, false, false, 227), "html", null, true);
        yield "</p>

                ";
        // line 229
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 229, $this->source); })()), "phone", [], "any", false, false, false, 229))) {
            // line 230
            yield "                  <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.phone"), "html", null, true);
            yield "</h6>
                  <p class=\"text-muted\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 231, $this->source); })()), "phone", [], "any", false, false, false, 231), "html", null, true);
            yield "</p>
                ";
        }
        // line 233
        yield "            </div>
        </div>
        <!--/ form HTML -->
    </div>
    <!--/ right section -->
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
        return "@MauticLead/Company/company.html.twig";
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
        return array (  485 => 233,  480 => 231,  475 => 230,  473 => 229,  468 => 227,  464 => 226,  454 => 222,  448 => 220,  445 => 219,  439 => 217,  437 => 216,  432 => 214,  429 => 213,  424 => 211,  419 => 210,  417 => 209,  411 => 206,  404 => 202,  385 => 185,  383 => 184,  382 => 183,  381 => 182,  380 => 181,  379 => 180,  378 => 178,  377 => 177,  376 => 176,  364 => 166,  362 => 163,  361 => 162,  351 => 155,  334 => 141,  328 => 138,  318 => 130,  299 => 124,  293 => 123,  288 => 120,  285 => 119,  279 => 117,  271 => 115,  269 => 114,  264 => 113,  261 => 112,  256 => 110,  251 => 109,  249 => 108,  244 => 106,  241 => 105,  238 => 104,  234 => 103,  221 => 98,  204 => 97,  198 => 93,  184 => 92,  176 => 89,  169 => 88,  166 => 87,  149 => 86,  137 => 76,  130 => 75,  124 => 72,  122 => 70,  121 => 69,  120 => 67,  119 => 64,  118 => 63,  115 => 62,  112 => 56,  110 => 53,  108 => 52,  105 => 51,  102 => 45,  101 => 44,  99 => 40,  97 => 39,  94 => 38,  92 => 37,  90 => 36,  88 => 35,  86 => 34,  79 => 33,  74 => 26,  73 => 21,  72 => 19,  65 => 18,  54 => 16,  43 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Company/company.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Company/company.html.twig");
    }
}
