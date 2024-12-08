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

/* @MauticLead/Company/list.html.twig */
class __TwigTemplate_84a944f8c51edf35abee2079796eb94e extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 14
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 14, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Company/list.html.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 12, $this->source); })()))) ? (true) : (false));
        // line 13
        $context["tmpl"] = "list";
        // line 14
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "company";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.companies.menu.root"), "html", null, true);
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 23, $this->source); })())) {
            // line 24
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 25
            $context["pageButtons"] = [];
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 26)) {
                // line 27
                yield "    ";
                $context["pageButtons"] = Twig\Extension\CoreExtension::merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 27, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["object" => "companies", "objectAction" => "new"])], "iconClass" => "ri-import-line", "btnText" => "mautic.lead.lead.import"], ["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" => "companies"])], "iconClass" => "ri-history-line", "btnText" => "mautic.lead.lead.import.index"]]);
            }
            // line 45
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 46
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 46, $this->source); })()), "action" =>             // line 47
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 47, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 49
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 49)], "routeBase" => "company", "customButtons" =>             // line 51
(isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 51, $this->source); })())]), "quickFilters" => [["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 62
            yield "<div class=\"page-list\">
  ";
        }
        // line 64
        yield "
  ";
        // line 65
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 65, $this->source); })())) > 0)) {
            // line 66
            yield "      <div class=\"table-responsive page-list\">
          <table class=\"table table-hover company-list\" id=\"companyTable\">
              <thead>
              <tr>
                  ";
            // line 70
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#companyTable", "routeBase" => "company", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 74
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 74, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 74)]]);
            // line 75
            yield "
                  ";
            // line 76
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.name", "class" => "col-company-name", "orderBy" => "comp.companyname"]);
            // line 81
            yield "
                  ";
            // line 82
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.email", "class" => "visible-md visible-lg col-company-category", "orderBy" => "comp.companyemail"]);
            // line 87
            yield "
                  ";
            // line 88
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.website", "class" => "visible-md visible-lg col-company-website", "orderBy" => "comp.companywebsite"]);
            // line 93
            yield "
                  ";
            // line 94
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.score", "class" => "visible-md visible-lg col-company-score", "orderBy" => "comp.score"]);
            // line 99
            yield "
                  ";
            // line 100
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-leadlist-leadcount"]);
            // line 104
            yield "
                  ";
            // line 105
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "orderBy" => "comp.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-company-id"]);
            // line 110
            yield "
              </tr>
              </thead>
              <tbody>
              ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 114, $this->source); })()));
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
                // line 115
                yield "                  ";
                $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fields", [], "any", false, false, false, 115);
                // line 116
                yield "                  <tr>
                      <td>
                          ";
                // line 118
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 119
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 121
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 121, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 121), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 122
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 122, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 122), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 123
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 123, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 123)], "routeBase" => "company"]);
                // line 126
                yield "
                      </td>
                      <td>
                          <div>
                          ";
                // line 130
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 130, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 130), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 130, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 130), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 130))) {
                    // line 131
                    yield "                              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_company_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 132
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 132), "companyname", [], "any", true, true, false, 132)) {
                        // line 133
                        yield "                                  ";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 133, $this->source); })()), "core", [], "any", false, false, false, 133), "companyname", [], "any", false, false, false, 133), "value", [], "any", false, false, false, 133));
                        yield "
                                ";
                    }
                    // line 135
                    yield "                              </a>
                          ";
                } else {
                    // line 137
                    yield "                              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 137), "companyname", [], "any", true, true, false, 137)) {
                        // line 138
                        yield "                                ";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 138, $this->source); })()), "core", [], "any", false, false, false, 138), "companyname", [], "any", false, false, false, 138), "value", [], "any", false, false, false, 138));
                        yield "
                              ";
                    }
                    // line 140
                    yield "                          ";
                }
                // line 141
                yield "                          </div>
                      </td>
                      <td>
                          ";
                // line 144
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 144), "companyemail", [], "any", true, true, false, 144)) {
                    // line 145
                    yield "                            ";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 145, $this->source); })()), "core", [], "any", false, false, false, 145), "companyemail", [], "any", false, false, false, 145), "value", [], "any", false, false, false, 145));
                    yield "
                          ";
                }
                // line 147
                yield "                      </td>

                      <td class=\"visible-md visible-lg\">
                          ";
                // line 150
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 150), "companywebsite", [], "any", true, true, false, 150)) {
                    // line 151
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::url(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 151, $this->source); })()), "core", [], "any", false, false, false, 151), "companywebsite", [], "any", false, false, false, 151), "value", [], "any", false, false, false, 151)), "html", null, true);
                    yield "
                          ";
                }
                // line 153
                yield "                      </td>
                      <td class=\"visible-md visible-lg\">
                          <span size=\"sm\" class=\"label label-gray\">";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 155), "html", null, true);
                yield "</span>
                      </td>
                      <td class=\"visible-md visible-lg\">
                          <a size=\"sm\" class=\"label label-gray\"
                             href=\"";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.company_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 159))]), "html", null, true);
                yield "\"
                             data-toggle=\"ajax\"
                             ";
                // line 161
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 161, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 161), [], "array", false, false, false, 161))) {
                    yield "disabled=\"disabled\"";
                }
                yield ">
                                  ";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.viewleads_count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 162, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 162), [], "array", false, false, false, 162)]), "html", null, true);
                yield "
                          </a>
                      </td>
                      <td class=\"visible-md visible-lg\">";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 165), "html", null, true);
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
            // line 168
            yield "              </tbody>
          </table>
      </div>
      <div class=\"panel-footer\">
          ";
            // line 172
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 173
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 173, $this->source); })()), "page" =>             // line 174
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 174, $this->source); })()), "limit" =>             // line 175
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 175, $this->source); })()), "menuLinkId" => "mautic_company_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_company_index"), "sessionVar" => "company"]);
            // line 179
            yield "
      </div>
  ";
        } else {
            // line 182
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.company.action.noresults.tip"]);
            yield "
  ";
        }
        // line 184
        yield "
  ";
        // line 185
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 185, $this->source); })())) {
            // line 186
            yield "        </div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Company/list.html.twig";
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
        return array (  324 => 186,  322 => 185,  319 => 184,  313 => 182,  308 => 179,  306 => 175,  305 => 174,  304 => 173,  303 => 172,  297 => 168,  280 => 165,  274 => 162,  268 => 161,  263 => 159,  256 => 155,  252 => 153,  246 => 151,  244 => 150,  239 => 147,  233 => 145,  231 => 144,  226 => 141,  223 => 140,  217 => 138,  214 => 137,  210 => 135,  204 => 133,  202 => 132,  197 => 131,  195 => 130,  189 => 126,  187 => 123,  186 => 122,  185 => 121,  184 => 119,  183 => 118,  179 => 116,  176 => 115,  159 => 114,  153 => 110,  151 => 105,  148 => 104,  146 => 100,  143 => 99,  141 => 94,  138 => 93,  136 => 88,  133 => 87,  131 => 82,  128 => 81,  126 => 76,  123 => 75,  121 => 74,  120 => 70,  114 => 66,  112 => 65,  109 => 64,  105 => 62,  103 => 51,  102 => 49,  101 => 47,  100 => 46,  99 => 45,  95 => 27,  93 => 26,  91 => 25,  89 => 24,  86 => 23,  79 => 22,  68 => 18,  57 => 16,  53 => 14,  51 => 13,  49 => 12,  42 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Company/list.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Company/list.html.twig");
    }
}
