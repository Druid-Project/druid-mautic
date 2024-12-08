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

/* @MauticPage/Page/form.html.twig */
class __TwigTemplate_82b73280aedcd885b2cfd176721dab0c extends Template
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
        // line 25
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), ["@MauticPage/FormTheme/Page/_page_abtest_settings_properties_row.html.twig", "@MauticPage/FormTheme/Page/_page_variantSettings_properties_row.html.twig"], true);
        // line 21
        $context["isExisting"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21);
        // line 22
        $context["variantParent"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 22, $this->source); })()), "variantParent", [], "any", false, false, false, 22);
        // line 23
        $context["previewUrl"] = ((array_key_exists("previewUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 23, $this->source); })()), "")) : (""));
        // line 25
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPage/Page/form.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "page";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        if ((isset($context["isExisting"]) || array_key_exists("isExisting", $context) ? $context["isExisting"] : (function () { throw new RuntimeError('Variable "isExisting" does not exist.', 30, $this->source); })())) {
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31)]), "html", null, true);
        } else {
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.header.new"), "html", null, true);
        }
        // line 35
        if ((isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 35, $this->source); })())) {
            // line 36
            yield "      <div><span class=\"small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), "%parent%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36)]), "html", null, true);
            yield "</span></div>
  ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 37, $this->source); })()), "isVariant", [false], "method", false, false, false, 37)) {
            // line 38
            yield "      <div><span class=\"small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.form.has_variants"), "html", null, true);
            yield "</span></div>";
        }
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "  <div id=\"grapesjsbuilder_assets\" class=\"hide\"></div>

  ";
        // line 45
        [$context["template"], $context["attr"]] =         [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "template", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "data", [], "any", false, false, false, 45), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "attr", [], "any", false, false, false, 45)];
        // line 46
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 46, $this->source); })()), ["data-submit-callback-async" => "clearThemeHtmlBeforeSave"]);
        // line 49
        yield "
  ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_start', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 50, $this->source); })())]);
        yield "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- container -->
      <div class=\"col-md-9 height-auto\">
          <div class=\"row\">
              <div class=\"col-xs-12\">
                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs nav-tabs-contained\">
                      <li class=\"active\">
                          <a href=\"#theme-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        yield "</a>
                      </li>
                      <li id=\"advanced-tab\" class=\"hidden\">
                          <a href=\"#advanced-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.advanced"), "html", null, true);
        yield "</a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane fade in active bdr-w-0\" id=\"theme-container\">
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "template", [], "any", false, false, false, 72), 'row');
        yield "
                              </div>
                          </div>
                          ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/theme_select.html.twig", ["type" => "page", "themes" =>         // line 77
(isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 77, $this->source); })()), "active" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 78
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "template", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78)], false);
        // line 79
        yield "
                      </div>

                      <div class=\"tab-pane fade bdr-w-0\" id=\"advanced-container\">
                          <br>
                          <div class=\"row hidden\" id=\"custom-html-row\">
                              <div class=\"col-md-12\">
                                  ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "customHtml", [], "any", false, false, false, 86), 'label');
        yield "
                                  ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "customHtml", [], "any", false, false, false, 87), 'widget');
        yield "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"col-md-3 height-auto bdr-l\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, false, 97), 'row');
        yield "
              ";
        // line 98
        if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 98, $this->source); })())) {
            // line 99
            yield "
                  ";
            // line 100
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "variantSettings", [], "any", false, false, false, 100), 'row');
            yield "
              ";
        } else {
            // line 102
            yield "                  ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "alias", [], "any", false, false, false, 102), 'row');
            yield "
                  ";
            // line 103
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "category", [], "any", false, false, false, 103), 'row');
            yield "
                  ";
            // line 104
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "language", [], "any", false, false, false, 104), 'row');
            yield "
                  ";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "translationParent", [], "any", false, false, false, 105), 'row');
            yield "
              ";
        }
        // line 107
        yield "
              ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "isPublished", [], "any", false, false, false, 108), 'row', ["attr" => ["data-none" => "mautic.core.form.unavailable_regardless_of_scheduling", "data-start" => "mautic.core.form.available_on_scheduled_date", "data-both" => "mautic.core.form.available_during_scheduled_period", "data-end" => "mautic.core.form.available_until_scheduled_end"]]);
        // line 115
        yield "

              ";
        // line 117
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 117, $this->source); })()), "page:preference_center:editown", [], "array", false, false, false, 117) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 117, $this->source); })()), "page:preference_center:editother", [], "array", false, false, false, 117)) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 117, $this->source); })()), "isVariant", [], "any", false, false, false, 117))) {
            // line 118
            yield "                  ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 118), 'row');
            yield "
              ";
        }
        // line 120
        yield "
              ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "publishUp", [], "any", false, false, false, 121), 'row', ["label" => "mautic.core.form.available.available_from"]);
        yield "
    \t      ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "publishDown", [], "any", false, false, false, 122), 'row', ["label" => "mautic.core.form.available.unavailable_from"]);
        yield "

              ";
        // line 124
        if ( !(isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 124, $this->source); })())) {
            // line 125
            yield "                  ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "redirectType", [], "any", false, false, false, 125), 'row');
            yield "
                  ";
            // line 126
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "redirectUrl", [], "any", false, false, false, 126), 'row');
            yield "
              ";
        }
        // line 128
        yield "
              ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "noIndex", [], "any", false, false, false, 129), 'row');
        yield "
              <div class=\"template-fields ";
        // line 130
        if ( !(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 130, $this->source); })())) {
            yield "hide";
        }
        yield "\">
                  ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "metaDescription", [], "any", false, false, false, 131), 'row');
        yield "
              </div>
              <div class=\"template-fields ";
        // line 133
        if ( !(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 133, $this->source); })())) {
            yield "hide";
        }
        yield "\">
                  ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "headScript", [], "any", false, false, false, 134), 'row');
        yield "
              </div>
              <div class=\"template-fields ";
        // line 136
        if ( !(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 136, $this->source); })())) {
            yield "hide";
        }
        yield "\">
                  ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "footerScript", [], "any", false, false, false, 137), 'row');
        yield "
              </div>
              <div class=\"hide\">
                  ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'rest');
        yield "
              </div>
          </div>
      </div>
  </div>
  ";
        // line 145
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
        yield "

  ";
        // line 147
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/builder.html.twig", ["type" => "page", "isCodeMode" => ("mautic_code_mode" === CoreExtension::getAttribute($this->env, $this->source,         // line 149
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 149, $this->source); })()), "template", [], "any", false, false, false, 149)), "sectionForm" =>         // line 150
(isset($context["sectionForm"]) || array_key_exists("sectionForm", $context) ? $context["sectionForm"] : (function () { throw new RuntimeError('Variable "sectionForm" does not exist.', 150, $this->source); })()), "builderAssets" =>         // line 151
(isset($context["builderAssets"]) || array_key_exists("builderAssets", $context) ? $context["builderAssets"] : (function () { throw new RuntimeError('Variable "builderAssets" does not exist.', 151, $this->source); })()), "slots" =>         // line 152
(isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 152, $this->source); })()), "sections" =>         // line 153
(isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 153, $this->source); })()), "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 154
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 154, $this->source); })()), "sessionId", [], "any", false, false, false, 154), "previewUrl" =>         // line 155
(isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 155, $this->source); })())], false);
        // line 156
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/Page/form.html.twig";
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
        return array (  327 => 156,  325 => 155,  324 => 154,  323 => 153,  322 => 152,  321 => 151,  320 => 150,  319 => 149,  318 => 147,  313 => 145,  305 => 140,  299 => 137,  293 => 136,  288 => 134,  282 => 133,  277 => 131,  271 => 130,  267 => 129,  264 => 128,  259 => 126,  254 => 125,  252 => 124,  247 => 122,  243 => 121,  240 => 120,  234 => 118,  232 => 117,  228 => 115,  226 => 108,  223 => 107,  218 => 105,  214 => 104,  210 => 103,  205 => 102,  200 => 100,  197 => 99,  195 => 98,  191 => 97,  178 => 87,  174 => 86,  165 => 79,  163 => 78,  162 => 77,  161 => 75,  155 => 72,  143 => 63,  137 => 60,  124 => 50,  121 => 49,  118 => 46,  116 => 45,  112 => 43,  105 => 42,  97 => 38,  95 => 37,  90 => 36,  88 => 35,  85 => 33,  82 => 31,  80 => 30,  73 => 29,  62 => 27,  57 => 25,  55 => 23,  53 => 22,  51 => 21,  49 => 17,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Page/form.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/Page/form.html.twig");
    }
}
