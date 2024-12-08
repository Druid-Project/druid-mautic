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

/* @MauticPage/Page/details.html.twig */
class __TwigTemplate_4fdb7272f829ac3da9a876b54746a9cb extends Template
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
        // line 20
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        $context["allowAbTest"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 18, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 18) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 18, $this->source); })()), "isTranslation", [true], "method", false, false, false, 18) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 18, $this->source); })()), "parent", [], "any", false, false, false, 18), "isVariant", [], "any", false, false, false, 18)))) ? (false) : (true));
        // line 20
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPage/Page/details.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "page";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 26
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 26, $this->source); })()), "customButtons" => ((        // line 27
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 27, $this->source); })()), [])) : ([])), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "page:pages:viewown", [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "page:pages:viewother", [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 29, $this->source); })()), "createdBy", [], "any", false, false, false, 29))], "routeBase" => "page", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.pages")]);
        // line 33
        yield "
";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), "html", null, true);
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 40
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 40, $this->source); })()), "customButtons" => ((        // line 41
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 41, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 43, $this->source); })()), "page:pages:editown", [], "array", false, false, false, 43), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 43, $this->source); })()), "page:pages:editother", [], "array", false, false, false, 43), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 43, $this->source); })()), "createdBy", [], "any", false, false, false, 43)), "abtest" => (        // line 44
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 44, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 44, $this->source); })()), "page:pages:create", [], "array", false, false, false, 44)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 45
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 45, $this->source); })()), "page:pages:create", [], "array", false, false, false, 45), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 46, $this->source); })()), "createdBy", [], "any", false, false, false, 46))], "routeBase" => "page"]);
        // line 49
        yield "
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" =>         // line 54
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 54, $this->source); })()), "status" => "available"]);
        // line 58
        $context["tags"] = [];
        // line 59
        yield "
    ";
        // line 60
        $context["tags"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 60, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source,         // line 61
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 61, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 61)) ? ([["type" => "read-only", "color" => "warm-gray", "label" => "mautic.email.form.preference_center"]]) : ([]))), (((CoreExtension::getAttribute($this->env, $this->source,         // line 64
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 64, $this->source); })()), "isVariant", [], "any", false, false, false, 64) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 64, $this->source); })()), "isVariant", [true], "method", false, false, false, 64))) ? ([["type" => "read-only", "color" => "warm-gray", "label" => "mautic.email.icon_tooltip.abtest"]]) : ([]))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 67, $this->source); })()), "isVariant", [true], "method", false, false, false, 67)) ? ([["color" => "warm-gray", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 68
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 68, $this->source); })()), "parent", [], "any", false, false, false, 68), "getName", [], "method", false, false, false, 68)]), "icon" => "ri-organization-chart"]]) : ([]))), (((CoreExtension::getAttribute($this->env, $this->source,         // line 70
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 70, $this->source); })()), "isTranslation", [], "any", false, false, false, 70) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 70, $this->source); })()), "isTranslation", [true], "method", false, false, false, 70))) ? ([["color" => "warm-gray", "label" => "mautic.core.icon_tooltip.translation"]]) : ([]))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 73
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 73, $this->source); })()), "isTranslation", [true], "method", false, false, false, 73)) ? ([["color" => "warm-gray", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 74, $this->source); })()), "parent", [], "any", false, false, false, 74), "getName", [], "method", false, false, false, 74)]), "icon" => "ri-translate"]]) : ([])));
        // line 77
        yield "
    ";
        // line 78
        yield from         $this->loadTemplate("@MauticCore/Helper/_tag.html.twig", "@MauticPage/Page/details.html.twig", 78)->unwrap()->yield(CoreExtension::merge($context, ["tags" => (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 78, $this->source); })())]));
        // line 79
        yield "
";
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "  ";
        $context["variantContent"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/index.html.twig", ["activeEntity" =>         // line 84
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 84, $this->source); })()), "variants" =>         // line 85
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 85, $this->source); })()), "abTestResults" =>         // line 86
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 86, $this->source); })()), "model" => "page", "actionRoute" => "mautic_page_action", "nameGetter" => "getTitle"]));
        // line 91
        yield "  ";
        $context["showVariants"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 91, $this->source); })()));
        // line 92
        yield "
  ";
        // line 93
        $context["translationContent"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 94
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 94, $this->source); })()), "translations" =>         // line 95
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 95, $this->source); })()), "model" => "page", "actionRoute" => "mautic_page_action", "nameGetter" => "getTitle"]));
        // line 100
        yield "  ";
        $context["showTranslations"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 100, $this->source); })()));
        // line 101
        yield "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- page detail header -->
                ";
        // line 108
        $context["extra_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 109
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 109, $this->source); })()), "isVariant", [true], "method", false, false, false, 109)) {
                // line 110
                yield "                        <div class=\"small\">
                            <a href=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 111, $this->source); })()), "parent", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 112, $this->source); })()), "parent", [], "any", false, false, false, 112), "getName", [], "method", false, false, false, 112)]), "html", null, true);
                // line 113
                yield "</a>
                        </div>
                    ";
            }
            // line 116
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 116, $this->source); })()), "isTranslation", [true], "method", false, false, false, 116)) {
                // line 117
                yield "                        <div class=\"small\">
                            <a href=\"";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 118, $this->source); })()), "parent", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 119, $this->source); })()), "parent", [], "any", false, false, false, 119), "getName", [], "method", false, false, false, 119)]), "html", null, true);
                // line 120
                yield "</a>
                        </div>
                    ";
            }
            // line 123
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 123, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 123)) {
                // line 124
                yield "                        <div class=\"small\">
                            ";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.preference_center"), "html", null, true);
                yield "
                        </div>
                    ";
            }
            // line 128
            yield "                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "
                ";
        // line 130
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticPage/Page/details.html.twig", 130)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source,         // line 131
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 131, $this->source); })()), "metaDescription", [], "any", false, false, false, 131), "extra_content" =>         // line 132
(isset($context["extra_content"]) || array_key_exists("extra_content", $context) ? $context["extra_content"] : (function () { throw new RuntimeError('Variable "extra_content" does not exist.', 132, $this->source); })())]));
        // line 134
        yield "              <!--/ page detail header -->

              <!-- page detail collapseable -->
              <div class=\"collapse pr-md pl-md\" id=\"page-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>
                                ";
        // line 142
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 142, $this->source); })())], false);
        yield "
                              </tbody>
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
                          <span class=\"caret\"></span> ";
        // line 156
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
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.pageviews"), "html", null, true);
        yield "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 175
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 175, $this->source); })()), "class" => "pull-right"]);
        yield "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 179
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 179, $this->source); })()), "pageviews", [], "any", false, false, false, 179), "chartType" => "line", "chartHeight" => 300]);
        yield "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 187
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs nav-tabs-contained\">
                  ";
        // line 191
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 191, $this->source); })())) {
            // line 192
            yield "                      <li class=\"active\">
                          <a href=\"#variants-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variants"), "html", null, true);
            // line 195
            yield "</a>
                      </li>
                  ";
        }
        // line 198
        yield "                  ";
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 198, $this->source); })())) {
            // line 199
            yield "                      <li class=\"";
            if ( !(isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 199, $this->source); })())) {
                yield "active";
            }
            yield "\">
                          <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            // line 202
            yield "</a>
                      </li>
                  ";
        }
        // line 205
        yield "              </ul>
              <!--/ tabs controls -->
          </div>

          ";
        // line 209
        if (((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 209, $this->source); })()) || (isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 209, $this->source); })()))) {
            // line 210
            yield "          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              ";
            // line 212
            if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 212, $this->source); })())) {
                // line 213
                yield "              <!-- #variants-container -->
              <div class=\"tab-pane active bdr-w-0\" id=\"variants-container\">
                  ";
                // line 215
                yield (isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 215, $this->source); })());
                yield "
              </div>
              <!--/ #variants-container -->
              ";
            }
            // line 219
            yield "              <!-- #translation-container -->
              ";
            // line 220
            if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 220, $this->source); })())) {
                // line 221
                yield "              <div class=\"tab-pane ";
                if ( !(isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 221, $this->source); })())) {
                    yield "active";
                }
                yield " bdr-w-0\" id=\"translation-container\">
                  ";
                // line 222
                yield (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 222, $this->source); })());
                yield "
              </div>
              ";
            }
            // line 225
            yield "              <!--/ #translation-container -->
          </div>
          <!--/ end: tab-content -->
          ";
        } elseif (        // line 228
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 228, $this->source); })())) {
            // line 229
            yield "          <div class=\"pa-md\">
              <div class=\"text-center\">
                    ";
            // line 231
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticPage/Page/details.html.twig", 231)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.ab_test.create", "variant" => "tertiary", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "abtest", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 236
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 236, $this->source); })()), "id", [], "any", false, false, false, 236)]), "icon" => "ri-arrow-right-s-line", "attributes" => ["class" => "create-abtest-link", "data-toggle" => "ajax"]]]]));
            // line 245
            yield "              </div>
          </div>
          ";
        }
        // line 248
        yield "      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- preview URL -->
          ";
        // line 254
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 254, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 254)) {
            // line 255
            yield "          <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.url"), "html", null, true);
            yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <div class=\"input-group\">
                      <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\"
                             readonly
                             value=\"";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageUrl"]) || array_key_exists("pageUrl", $context) ? $context["pageUrl"] : (function () { throw new RuntimeError('Variable "pageUrl" does not exist.', 263, $this->source); })()));
            yield "\"/>
                      <span class=\"input-group-btn\">
                        ";
            // line 265
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticPage/Page/details.html.twig", 265)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.open_link", "variant" => "ghost", "icon_only" => true, "icon" => "ri-external-link-line", "onclick" => (("window.open(\"" .             // line 272
(isset($context["pageUrl"]) || array_key_exists("pageUrl", $context) ? $context["pageUrl"] : (function () { throw new RuntimeError('Variable "pageUrl" does not exist.', 272, $this->source); })())) . "\", \"_blank\");"), "attributes" => ["class" => "btn-nospin"]]]]));
            // line 279
            yield "                      </span>
                  </div>
              </div>
          </div>
          ";
        }
        // line 284
        yield "          <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.preview.url"), "html", null, true);
        yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  ";
        // line 289
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "translation", [], "any", true, true, false, 289)) {
            // line 290
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.translation"), "html", null, true);
            yield "</div>
                              ";
            // line 293
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 293, $this->source); })()), "translation", [], "any", false, false, false, 293), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 297
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "variant", [], "any", true, true, false, 297)) {
            // line 298
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.ab.variant"), "html", null, true);
            yield "</div>
                              ";
            // line 301
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 301, $this->source); })()), "variant", [], "any", false, false, false, 301), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 305
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "contact", [], "any", true, true, false, 305)) {
            // line 306
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.contact"), "html", null, true);
            yield "</div>
                              ";
            // line 309
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 309, $this->source); })()), "contact", [], "any", false, false, false, 309), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 313
        yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"input-group\">
                              <input id=\"content_preview_url\"
                                     data-route=\"page/preview\"
                                     onclick=\"this.setSelectionRange(0, this.value.length);\"
                                     type=\"text\"
                                     class=\"form-control\"
                                     readonly
                                     value=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 322, $this->source); })()));
        yield "\"/>
                              <span class=\"input-group-btn\">
                                ";
        // line 324
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticPage/Page/details.html.twig", 324)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.open_link", "variant" => "ghost", "icon_only" => true, "icon" => "ri-external-link-line", "onclick" => (("window.open(\"" .         // line 331
(isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 331, $this->source); })())) . "\", \"_blank\");"), "attributes" => ["id" => "content_preview_url_button", "class" => "btn-nospin"]]]]));
        // line 339
        yield "                              </span>
                              <input type=\"hidden\" id=\"content_preview_settings_object_id\" value=\"";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 340, $this->source); })()), "id", [], "any", false, false, false, 340), "html", null, true);
        yield "\">
                              <input type=\"hidden\" id=\"content_preview_settings_contact_id\" value=\"\">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ preview URL -->
          <hr class=\"hr-w-2\" style=\"width:50%\">
          <!-- recent activity -->
          ";
        // line 350
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 350, $this->source); })())], false);
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
        return "@MauticPage/Page/details.html.twig";
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
        return array (  552 => 350,  539 => 340,  536 => 339,  534 => 331,  533 => 324,  528 => 322,  517 => 313,  510 => 309,  506 => 308,  502 => 306,  499 => 305,  492 => 301,  488 => 300,  484 => 298,  481 => 297,  474 => 293,  470 => 292,  466 => 290,  464 => 289,  458 => 286,  454 => 284,  447 => 279,  445 => 272,  444 => 265,  439 => 263,  430 => 257,  426 => 255,  424 => 254,  416 => 248,  411 => 245,  409 => 236,  408 => 231,  404 => 229,  402 => 228,  397 => 225,  391 => 222,  384 => 221,  382 => 220,  379 => 219,  372 => 215,  368 => 213,  366 => 212,  362 => 210,  360 => 209,  354 => 205,  349 => 202,  347 => 201,  340 => 199,  337 => 198,  332 => 195,  330 => 194,  327 => 192,  325 => 191,  318 => 187,  307 => 179,  300 => 175,  293 => 171,  275 => 156,  258 => 142,  248 => 134,  246 => 132,  245 => 131,  244 => 130,  241 => 129,  237 => 128,  231 => 125,  228 => 124,  225 => 123,  220 => 120,  218 => 119,  215 => 118,  212 => 117,  209 => 116,  204 => 113,  202 => 112,  199 => 111,  196 => 110,  193 => 109,  191 => 108,  182 => 101,  179 => 100,  177 => 95,  176 => 94,  175 => 93,  172 => 92,  169 => 91,  167 => 86,  166 => 85,  165 => 84,  163 => 83,  156 => 82,  150 => 79,  148 => 78,  145 => 77,  143 => 74,  142 => 73,  141 => 70,  140 => 68,  139 => 67,  138 => 64,  137 => 61,  136 => 60,  133 => 59,  131 => 58,  129 => 54,  128 => 53,  121 => 52,  115 => 49,  113 => 46,  112 => 45,  111 => 44,  110 => 43,  109 => 41,  108 => 40,  106 => 39,  99 => 38,  88 => 36,  82 => 33,  80 => 29,  79 => 27,  78 => 26,  77 => 25,  70 => 24,  59 => 22,  54 => 20,  52 => 18,  45 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Page/details.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/Page/details.html.twig");
    }
}
