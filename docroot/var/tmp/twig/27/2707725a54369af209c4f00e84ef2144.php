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

/* @MauticFocus/Focus/details.html.twig */
class __TwigTemplate_7b259d46ef3f406ebde7ce4f53934064 extends Template
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
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticFocus/Focus/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "focus";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })())]);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 14
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("focus:items:view")], "routeBase" => "focus", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.focus_items")]);
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 26
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "focus:items:editown", [], "array", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "focus:items:editother", [], "array", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "createdBy", [], "any", false, false, false, 28)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "focus:items:create", [], "array", false, false, false, 29), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 30, $this->source); })()), "focus:items:deleteown", [], "array", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 30, $this->source); })()), "focus:items:deleteother", [], "array", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "createdBy", [], "any", false, false, false, 30))], "routeBase" => "focus", "langVar" => "focus"]);
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "  ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFocusBundle/Assets/js/focus.js");
        yield "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div class=\"bg-auto\">
              <!-- form detail header -->
              ";
        // line 46
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticFocus/Focus/details.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46)]));
        // line 47
        yield "              <!--/ form detail header -->

              <!-- form detail collapseable -->
              <div class=\"collapse pr-md pl-md\" id=\"focus-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\" data-view-table data-entity-id=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53), "html", null, true);
        yield ">
                              <tbody>
                              ";
        // line 55
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })())]);
        yield "
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.details.views"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td data-focus-total-views-cell>
                                      <div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.details.unique_views"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td data-focus-total-unique-views-cell>
                                      <div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/ form detail collapseable -->
          </div>

          <div class=\"bg-auto bg-dark-xs\">
              <!-- form detail collapseable toggler -->
              <div class=\"hr-expand nm\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                      <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#focus-details\"><span class=\"caret\"></span>
                        ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                      </a>
                  </span>
              </div>
              <!--/ form detail collapseable toggler -->

              <!-- stats -->
              <div class=\"pa-md\">
                  <div class=\"row\">
                      <div class=\"col-sm-12\">
                          <div class=\"panel\">
                              <div class=\"panel-body box-layout\">
                                  <div class=\"col-xs-4 va-m\">
                                      <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                          <span class=\"ri-line-chart-fill\"></span>
                                          ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.graph.stats"), "html", null, true);
        yield "
                                      </h5>
                                  </div>
                                  <div class=\"col-xs-8 va-m\">
                                      ";
        // line 104
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 104, $this->source); })()), "class" => "pull-right"]);
        yield "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 108
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 108, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        yield "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 116
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              ";
        // line 118
        if ((array_key_exists("trackables", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 118, $this->source); })())))) {
            // line 119
            yield "                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs nav-tabs-contained\">
                      <li class=\"active\">
                          <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
            yield "
                          </a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <!-- start: tab-content -->
                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">
                          ";
            // line 132
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>             // line 133
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 133, $this->source); })()), "entity" =>             // line 134
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "channel" => "focus"]);
            // line 136
            yield "
                      </div>
                  </div>
                  <!-- end: tab-content -->
              ";
        }
        // line 141
        yield "
          </div>
      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- form HTML -->
          <div class=\"pa-md\">
              <div class=\"panel bg-info bg-light-lg bdr-w-0 mb-0\">
                  <div class=\"panel-body\">
                      <h5 class=\"fw-sb mb-sm\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.install.header"), "html", null, true);
        yield "</h5>
                      <p class=\"mb-sm\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.install.description"), "html", null, true);
        yield "</p>
                      <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"&lt;script src=&quot;";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_focus_generate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154)], true), "html", null, true);
        yield "&quot; type=&quot;text/javascript&quot; charset=&quot;utf-8&quot; async=&quot;async&quot;&gt;&lt;/script&gt;\"/>
                  </div>
              </div>
          </div>
          <!--/ form HTML -->

          <hr class=\"hr-w-2\" style=\"width:50%\">

          ";
        // line 163
        yield "          <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mb-0\">
              <!-- recent activity -->
              ";
        // line 165
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 165, $this->source); })())]);
        yield "
          </div>
      </div>
      <!--/ right section -->
  </div>
  <!--/ end: box layout -->

  <input type=\"hidden\" name=\"entityId\" id=\"entityId\" value=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172), "html", null, true);
        yield "\"/>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Focus/details.html.twig";
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
        return array (  319 => 172,  309 => 165,  305 => 163,  294 => 154,  290 => 153,  286 => 152,  273 => 141,  266 => 136,  264 => 134,  263 => 133,  262 => 132,  250 => 123,  244 => 119,  242 => 118,  237 => 116,  226 => 108,  219 => 104,  212 => 100,  194 => 85,  189 => 83,  169 => 66,  158 => 58,  152 => 55,  147 => 53,  139 => 47,  137 => 46,  126 => 39,  119 => 38,  114 => 30,  113 => 29,  112 => 28,  111 => 26,  110 => 25,  103 => 24,  98 => 14,  97 => 12,  90 => 11,  85 => 8,  78 => 7,  67 => 5,  56 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Focus/details.html.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Focus/details.html.twig");
    }
}
