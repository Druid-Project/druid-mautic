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

/* @MauticReport/Report/form.html.twig */
class __TwigTemplate_81b802ac2850d866c693e1f435adf935 extends Template
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
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticReport/Report/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "report";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)) {
            // line 7
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7))]), "html", null, true);
            yield "
  ";
        } else {
            // line 9
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.header.new"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), ["@MauticReport/FormTheme/Report/layout.html.twig"], true);
        // line 15
        $context["showGraphTab"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "graphs", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "choices", [], "any", false, false, false, 15)) > 0);
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        yield "
  ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'errors');
        yield "
  <div class=\"box-layout\">
      <div class=\"col-md-9 height-auto\">
          <div class=\"row\">
              <div class=\"col-xs-12\">
                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs nav-tabs-contained\">
                      <li class=\"active\">
                          <a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a>
                      </li>
                      <li class=\"\">
                          <a href=\"#data-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.tab.data"), "html", null, true);
        yield "</a>
                      </li>
                      <li class=\"";
        // line 31
        if ( !(isset($context["showGraphTab"]) || array_key_exists("showGraphTab", $context) ? $context["showGraphTab"] : (function () { throw new RuntimeError('Variable "showGraphTab" does not exist.', 31, $this->source); })())) {
            yield "hide";
        }
        yield "\" id=\"graphs-tab\">
                          <a href=\"#graphs-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.tab.graphs"), "html", null, true);
        yield "</a>
                      </li>
                      <li>
                          <a href=\"#schedule-container\" role=\"tab\" class=\"";
        // line 35
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "toAddress", [], "any", false, false, false, 35))) {
            yield "text-danger";
        }
        yield "\" data-toggle=\"tab\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.tab.schedule"), "html", null, true);
        yield "</a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane fade in active bdr-w-0\" id=\"details-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), 'row');
        yield "
                                  </div>
                              </div>
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "source", [], "any", false, false, false, 50), 'row');
        yield "
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  <div class=\"pa-md\">
                                      ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), 'row');
        yield "
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class=\"tab-pane fade bdr-w-0\" id=\"data-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      <h4><strong>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.form.columnselector"), "html", null, true);
        yield "</strong></h4>
                                      ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "columns", [], "any", false, false, false, 68), 'row');
        yield "
                                  </div>
                              </div>
                              <div class=\"col-md-6\">
                                  <div class=\"ml-md\">
                                      <h4><strong>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.order"), "html", null, true);
        yield "</strong></h4>
                                      ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "tableOrder", [], "any", false, false, false, 74), 'row');
        yield "
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  <div class=\"pa-md\">
                                      <h4><strong>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        yield "</strong></h4>
                                      ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "filters", [], "any", false, false, false, 82), 'row');
        yield "
                                  </div>
                                  <div class=\"hide\">
                                      <div id=\"filterValueYesNoTemplate\">
                                          ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "value_template_yesno", [], "any", false, false, false, 86), 'widget');
        yield "
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      <h4><strong>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.form.groupby"), "html", null, true);
        yield "</strong></h4>
                                      ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "groupBy", [], "any", false, false, false, 95), 'row');
        yield "
                                  </div>
                              </div>
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      <h4><strong>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.calculated.fields"), "html", null, true);
        yield "</strong></h4>
                                      ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "aggregators", [], "any", false, false, false, 101), 'row');
        yield "
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class=\"tab-pane fade bdr-w-0 ";
        // line 106
        if ( !(isset($context["showGraphTab"]) || array_key_exists("showGraphTab", $context) ? $context["showGraphTab"] : (function () { throw new RuntimeError('Variable "showGraphTab" does not exist.', 106, $this->source); })())) {
            yield "hide";
        }
        yield "\" id=\"graphs-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "form", [], "any", false, false, false, 110), "children", [], "any", false, false, false, 110), "settings", [], "any", false, false, false, 110), "showGraphsAboveTable", [], "any", false, false, false, 110), 'row');
        yield "
                                      ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "graphs", [], "any", false, false, false, 111), 'row');
        yield "
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class=\"tab-pane fade bdr-w-0\" id=\"schedule-container\">
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "isScheduled", [], "any", false, false, false, 119), 'row');
        yield "
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-sm-12 col-md-6\">
                                  <div class=\"schedule_form\">
                                      ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "toAddress", [], "any", false, false, false, 125), 'row');
        yield "
                                      ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "scheduleUnit", [], "any", false, false, false, 126), 'row');
        yield "

                                      <div id=\"scheduleMonthFrequency\">
                                          ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "scheduleMonthFrequency", [], "any", false, false, false, 129), 'row');
        yield "
                                      </div>
                                      <div id=\"scheduleDay\">
                                          ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "scheduleDay", [], "any", false, false, false, 132), 'row');
        yield "
                                      </div>
                                  </div>
                              </div>
                              <div class=\"col-sm-12 col-md-6\">
                                  <div class=\"schedule_form well well-sm mt-lg\">
                                      <span id=\"schedule_preview_url\" data-url=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_schedule_preview");
        yield "\"></span>
                                      <div id=\"schedule_preview_data\">
                                          <strong>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.schedule.preview_data"), "html", null, true);
        yield "</strong>
                                          <div id=\"schedule_preview_data_content\" class=\"mt-sm\"></div>
                                      </div>
                                  </div>
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
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "isPublished", [], "any", false, false, false, 153), 'row');
        yield "
              ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "system", [], "any", false, false, false, 154), 'row');
        yield "
              ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "createdBy", [], "any", false, false, false, 155), 'row');
        yield "
              <hr>
              <h5>";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.form.display.dynamic.filters.settings"), "html", null, true);
        yield "</h5>
              <br>
              ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "vars", [], "any", false, false, false, 159), "form", [], "any", false, false, false, 159), "children", [], "any", false, false, false, 159), "settings", [], "any", false, false, false, 159), "showDynamicFilters", [], "any", false, false, false, 159), 'row');
        yield "
              ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "vars", [], "any", false, false, false, 160), "form", [], "any", false, false, false, 160), "children", [], "any", false, false, false, 160), "settings", [], "any", false, false, false, 160), "hideDateRangeFilter", [], "any", false, false, false, 160), 'row');
        yield "
          </div>
      </div>
  </div>
  ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Report/form.html.twig";
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
        return array (  366 => 164,  359 => 160,  355 => 159,  350 => 157,  345 => 155,  341 => 154,  337 => 153,  321 => 140,  316 => 138,  307 => 132,  301 => 129,  295 => 126,  291 => 125,  282 => 119,  271 => 111,  267 => 110,  258 => 106,  250 => 101,  246 => 100,  238 => 95,  234 => 94,  223 => 86,  216 => 82,  212 => 81,  202 => 74,  198 => 73,  190 => 68,  186 => 67,  173 => 57,  163 => 50,  155 => 45,  138 => 35,  132 => 32,  126 => 31,  121 => 29,  115 => 26,  104 => 18,  100 => 17,  98 => 15,  96 => 14,  89 => 13,  80 => 9,  74 => 7,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/form.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/Report/form.html.twig");
    }
}
