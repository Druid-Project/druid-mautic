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

/* @MauticLead/Field/list.html.twig */
class __TwigTemplate_adf9fd6ddc4164b575cd80168564e00a extends Template
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
        // line 19
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 19, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Field/list.html.twig", 19);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 17, $this->source); })()))) ? (true) : (false));
        // line 18
        $context["tmpl"] = "list";
        // line 19
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "leadfield";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.index"), "html", null, true);
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 26, $this->source); })())) {
            // line 27
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">
        ";
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 29
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 29, $this->source); })()), "action" =>             // line 30
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 30, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => true], "routeBase" => "contactfield", "langVar" => "lead.field"])]);
            // line 38
            yield "
        <div class=\"page-list\">
  ";
        }
        // line 41
        yield "
  ";
        // line 42
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 42, $this->source); })())) > 0)) {
            // line 43
            yield "      <div class=\"table-responsive\">
          <table class=\"table table-hover leadfield-list\" id=\"leadFieldTable\" class=\"overflow:auto\">
              <thead>
              <tr>
                  <th class=\"col-leadfield-orderhandle\"></th>
                  ";
            // line 48
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#leadFieldTable", "langVar" => "lead.field", "routeBase" => "contactfield", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 54
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 54, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 54)]]);
            // line 56
            yield "
                  <th class=\"col-leadfield-label\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.label"), "html", null, true);
            yield "</th>
                  <th class=\"visible-md visible-lg col-leadfield-alias\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.alias"), "html", null, true);
            yield "</th>
                  <th class=\"visible-md visible-lg col-leadfield-group\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.object"), "html", null, true);
            yield "</th>
                  <th class=\"visible-md visible-lg col-leadfield-group\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.group"), "html", null, true);
            yield "</th>
                  <th class=\"col-leadfield-type\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type"), "html", null, true);
            yield "</th>
                  <th class=\"visible-md visible-lg col-leadfield-id\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.id"), "html", null, true);
            yield "</th>
                  <th class=\"visible-sm visible-md visible-lg col-leadfield-statusicons\"></th>
              </tr>
              </thead>
              <tbody>
              ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 67, $this->source); })()));
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
                // line 68
                yield "                  <tr id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 68), "html", null, true);
                yield "\">
                      <td><i class=\"ri-xl ri-draggable text-muted\"></i></td>
                      <td>
                          ";
                // line 71
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 72
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 74
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 74, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 74), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 75
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 75, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 75), "delete" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 76
$context["item"], "isFixed", [], "any", false, false, false, 76)) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 76, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 76)))], "routeBase" => "contactfield", "langVar" => "lead.field", "pull" => "left"]);
                // line 81
                yield "
                      </td>
                      <td>
                      <span class=\"ellipsis\">
                          ";
                // line 85
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 86
$context["item"], "model" => "lead.field", "disableToggle" => CoreExtension::getAttribute($this->env, $this->source,                 // line 88
$context["item"], "disablePublishChange", [], "any", false, false, false, 88), "aditionalLabel" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 89
$context["item"], "columnIsNotCreated", [], "any", false, false, false, 89)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.being_created_in_background")) : (null))]);
                // line 90
                yield "
                          <a href=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactfield_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 91), "html", null, true);
                yield "</a>
                      </span>
                      </td>
                      <td class=\"visible-md visible-lg\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alias", [], "any", false, false, false, 94), "html", null, true);
                yield "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((("mautic." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "object", [], "any", false, false, false, 95)) . ".") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "object", [], "any", false, false, false, 95))), "html", null, true);
                yield "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "group", [], "any", false, false, false, 96))), "html", null, true);
                yield "</td>
                      <td>";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorConditional(("mautic.core.type." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 97)), ("mautic.lead.field.type." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 97))), "html", null, true);
                yield "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 98), "html", null, true);
                yield "</td>
                      <td class=\"visible-sm visible-md visible-lg\">
                          ";
                // line 100
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isRequired", [], "any", false, false, false, 100)) {
                    // line 101
                    yield "                              <i class=\"ri-asterisk\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.required"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 103
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVisible", [], "any", false, false, false, 103)) {
                    // line 104
                    yield "                              <i class=\"ri-eye-line-slash\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.invisible"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 106
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isFixed", [], "any", false, false, false, 106)) {
                    // line 107
                    yield "                              <i class=\"ri-lock-fill\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.fixed"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 109
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isListable", [], "any", false, false, false, 109)) {
                    // line 110
                    yield "                              <i class=\"ri-list-check \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.listable"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 112
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isPubliclyUpdatable", [], "any", false, false, false, 112)) {
                    // line 113
                    yield "                              <i class=\"ri-earth-line text-danger \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.public"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 115
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isUniqueIdentifer", [], "any", false, false, false, 115)) {
                    // line 116
                    yield "                              <i class=\"ri-key-2-line \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.isuniqueidentifer"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 118
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isIsIndex", [], "any", false, false, false, 118)) {
                    // line 119
                    yield "                              <i class=\"ri-key-2-line \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.isindex"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 121
                yield "                      </td>
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
            // line 124
            yield "              </tbody>
          </table>
      </div>
      <div class=\"panel-footer\">
          ";
            // line 128
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 129
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 129, $this->source); })()), "page" =>             // line 130
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 130, $this->source); })()), "limit" =>             // line 131
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactfield_index"), "sessionVar" => "leadfield"]);
            // line 134
            yield "
      </div>
  ";
        } else {
            // line 137
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
  ";
        }
        // line 139
        yield "
  ";
        // line 140
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 140, $this->source); })())) {
            // line 141
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
        return "@MauticLead/Field/list.html.twig";
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
        return array (  325 => 141,  323 => 140,  320 => 139,  314 => 137,  309 => 134,  307 => 131,  306 => 130,  305 => 129,  304 => 128,  298 => 124,  282 => 121,  276 => 119,  273 => 118,  267 => 116,  264 => 115,  258 => 113,  255 => 112,  249 => 110,  246 => 109,  240 => 107,  237 => 106,  231 => 104,  228 => 103,  222 => 101,  220 => 100,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  199 => 94,  191 => 91,  188 => 90,  186 => 89,  185 => 88,  184 => 86,  183 => 85,  177 => 81,  175 => 76,  174 => 75,  173 => 74,  172 => 72,  171 => 71,  164 => 68,  147 => 67,  139 => 62,  135 => 61,  131 => 60,  127 => 59,  123 => 58,  119 => 57,  116 => 56,  114 => 54,  113 => 48,  106 => 43,  104 => 42,  101 => 41,  96 => 38,  94 => 30,  93 => 29,  92 => 28,  89 => 27,  86 => 26,  79 => 25,  68 => 23,  57 => 21,  53 => 19,  51 => 18,  49 => 17,  42 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Field/list.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Field/list.html.twig");
    }
}
