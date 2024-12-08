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

/* @MauticDynamicContent/DynamicContent/details.html.twig */
class __TwigTemplate_c4e4c86ad148d230a856a503294067a6 extends Template
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
            'publishStatus' => [$this, 'block_publishStatus'],
            'indexButton' => [$this, 'block_indexButton'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->loadTemplate((( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticDynamicContent/DynamicContent/details.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "dynamicContent";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" =>         // line 11
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "status" => "available"]);
        // line 15
        $context["tags"] = [["color" => "warm-gray", "label" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 18)) ? ("mautic.dwc.form.is.campaign") : ("mautic.dwc.form.is.standalone"))]];
        // line 23
        yield "
    ";
        // line 24
        $context["tags"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 24, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "isTranslation", [], "any", false, false, false, 25) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "isTranslation", [true], "method", false, false, false, 25))) ? ([["color" => "warm-gray", "label" => "mautic.core.icon_tooltip.translation"]]) : ([]))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "isTranslation", [true], "method", false, false, false, 28)) ? ([["color" => "warm-gray", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 29, $this->source); })()), "parent", [], "any", false, false, false, 29), "getName", [], "method", false, false, false, 29)]), "icon" => "ri-translate"]]) : ([])));
        // line 32
        yield "
    ";
        // line 33
        yield from         $this->loadTemplate("@MauticCore/Helper/_tag.html.twig", "@MauticDynamicContent/DynamicContent/details.html.twig", 33)->unwrap()->yield(CoreExtension::merge($context, ["tags" => (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 33, $this->source); })())]));
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 39
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 41, $this->source); })()), "dynamiccontent:dynamiccontents:viewown", [], "array", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 41, $this->source); })()), "dynamiccontent:dynamiccontents:viewother", [], "array", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "createdBy", [], "any", false, false, false, 41))], "routeBase" => "dynamicContent", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.dynamicContents")]);
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 51
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "customButtons" => ((        // line 52
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 52, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 54, $this->source); })()), "dynamiccontent:dynamiccontents:editown", [], "array", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 54, $this->source); })()), "dynamiccontent:dynamiccontents:editother", [], "array", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "createdBy", [], "any", false, false, false, 54)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 55, $this->source); })()), "dynamiccontent:dynamiccontents:create", [], "array", false, false, false, 55), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 56
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 56, $this->source); })()), "dynamiccontent:dynamiccontents:deleteown", [], "array", false, false, false, 56), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 56, $this->source); })()), "dynamiccontent:dynamiccontents:deleteother", [], "array", false, false, false, 56), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "createdBy", [], "any", false, false, false, 56))], "routeBase" => "dynamicContent"]);
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        $context["translationContent"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 64
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "translations" =>         // line 65
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 65, $this->source); })()), "model" => "dynamicContent", "actionRoute" => "mautic_dynamicContent_action"]));
        // line 69
        $context["showTranslations"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 69, $this->source); })()));
        // line 71
        yield "<!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- page detail header -->
                ";
        // line 77
        $context["description"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 78
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 78, $this->source); })()), "isVariant", [true], "method", false, false, false, 78)) {
                // line 79
                yield "                        <div class=\"small\">
                            <a href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 80, $this->source); })()), "parent", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                                ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 81, $this->source); })()), "parent", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81)]), "html", null, true);
                yield "
                            </a>
                        </div>
                    ";
            }
            // line 85
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 85, $this->source); })()), "isTranslation", [true], "method", false, false, false, 85)) {
                // line 86
                yield "                        <div class=\"small\">
                            <a href=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 87, $this->source); })()), "parent", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                                ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 88, $this->source); })()), "parent", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88)]), "html", null, true);
                yield "
                            </a>
                        </div>
                    ";
            }
            // line 92
            yield "                    ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 92, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 92)) {
                // line 93
                yield "                        <div class=\"small\">
                            ";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.header.is_filter_based", ["%slot%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 94, $this->source); })()), "slotName", [], "any", false, false, false, 94)]), "html", null, true);
                yield "
                        </div>
                    ";
            }
            // line 97
            yield "                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "
                ";
        // line 99
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticDynamicContent/DynamicContent/details.html.twig", 99)->unwrap()->yield(CoreExtension::merge($context, ["description" => (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 99, $this->source); })())]));
        // line 100
        yield "              <!--/ page detail header -->
              <!-- page detail collapseable -->
              <div class=\"collapse pr-md pl-md\" id=\"page-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>
                              ";
        // line 107
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 107, $this->source); })())]);
        yield "
                              <tr>
                                  <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.slot.campaign"), "html", null, true);
        yield "</span></td>
                                  <td>";
        // line 110
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 110, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 110)) ? ("Yes") : ("No"));
        yield "</td>
                              </tr>
                              ";
        // line 112
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 112, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 112)) {
            // line 113
            yield "                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.label.slot_name"), "html", null, true);
            yield "</span></td>
                                    <td>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 115, $this->source); })()), "slotName", [], "any", false, false, false, 115), "html", null, true);
            yield "</td>
                                </tr>
                              ";
        }
        // line 118
        yield "                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/ page detail collapseable -->
          </div>
          <div>
              <!-- page detail collapseable toggler -->
              <div class=\"hr-expand nm\">
                  <span data-toggle=\"tooltip\" title=\"Detail\">
                      <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#page-details\">
                          <span class=\"caret\"></span>
                          ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                      </a>
                  </span>
              </div>
              <!--/ page detail collapseable toggler -->

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
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.views"), "html", null, true);
        yield "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 150
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 150, $this->source); })()), "class" => "pull-right"]);
        yield "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 154
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 154, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        yield "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 162
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs nav-tabs-contained\">
                  <li class=\"active\">
                      <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        yield "
                      </a>
                  </li>
                  ";
        // line 171
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 171, $this->source); })())) {
            // line 172
            yield "                  <li class>
                      <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            yield "
                      </a>
                  </li>
                  ";
        }
        // line 178
        yield "              </ul>
              <!--/ tabs controls -->
          </div>
          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <div class=\"tab-pane active active bdr-w-0\" id=\"clicks-container\">
                  ";
        // line 184
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" => (isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 184, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 184, $this->source); })()), "channel" => "dynamicContent"]);
        yield "

              </div>
              <!-- #translation-container -->
              ";
        // line 188
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 188, $this->source); })())) {
            // line 189
            yield "                  <div class=\"tab-pane bdr-w-0\" id=\"translation-container\">
                      ";
            // line 190
            yield (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 190, $this->source); })());
            yield "
                  </div>
              ";
        }
        // line 193
        yield "              <!--/ #translation-container -->
          </div>
          <!-- end: tab-content -->
      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <hr class=\"hr-w-2\" style=\"width:50%\">
          <!-- recent activity -->
          ";
        // line 203
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 203, $this->source); })())]);
        yield "
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
        return "@MauticDynamicContent/DynamicContent/details.html.twig";
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
        return array (  377 => 203,  365 => 193,  359 => 190,  356 => 189,  354 => 188,  347 => 184,  339 => 178,  332 => 174,  328 => 172,  326 => 171,  320 => 168,  311 => 162,  300 => 154,  293 => 150,  286 => 146,  268 => 131,  253 => 118,  247 => 115,  243 => 114,  240 => 113,  238 => 112,  233 => 110,  229 => 109,  224 => 107,  215 => 100,  213 => 99,  210 => 98,  206 => 97,  200 => 94,  197 => 93,  194 => 92,  187 => 88,  183 => 87,  180 => 86,  177 => 85,  170 => 81,  166 => 80,  163 => 79,  160 => 78,  158 => 77,  150 => 71,  148 => 69,  146 => 65,  145 => 64,  144 => 63,  137 => 62,  132 => 56,  131 => 55,  130 => 54,  129 => 52,  128 => 51,  127 => 50,  120 => 49,  115 => 41,  114 => 39,  113 => 37,  106 => 36,  101 => 33,  98 => 32,  96 => 29,  95 => 28,  94 => 25,  93 => 24,  90 => 23,  88 => 18,  87 => 15,  85 => 11,  84 => 10,  77 => 9,  66 => 7,  55 => 5,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/details.html.twig", "/app/docroot/app/bundles/DynamicContentBundle/Resources/views/DynamicContent/details.html.twig");
    }
}
