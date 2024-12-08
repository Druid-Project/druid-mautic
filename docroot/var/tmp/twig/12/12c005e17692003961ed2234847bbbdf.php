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

/* @MauticSocial/Monitoring/details.html.twig */
class __TwigTemplate_8db5f12b5976f1ed86a6642e61a70ddc extends Template
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
            'indexButton' => [$this, 'block_indexButton'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return $this->loadTemplate((((isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 6, $this->source); })())) ? ("@MauticCore/Default/raw_output.html.twig") : ("@MauticCore/Default/content.html.twig")), "@MauticSocial/Monitoring/details.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "monitoring";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 15
(isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 15, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:view")], "routeBase" => "social", "langVar" => "monitoring", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.social.monitoring")]);
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 28
(isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 28, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:edit"), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:delete")], "routeBase" => "social", "langVar" => "monitoring", "nameGetter" => "getTitle"]);
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 40, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "  ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticSocialBundle/Assets/js/social.js");
        yield "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- monitoring detail header -->
              ";
        // line 51
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticSocial/Monitoring/details.html.twig", 51)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51)]));
        // line 52
        yield "              <!--/ monitoring detail header -->
              <!-- monitoring detail collapseable -->
              <div class=\"collapse pr-md pl-md\" id=\"asset-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>
                                  ";
        // line 59
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 59, $this->source); })())]);
        yield "
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/  monitoring collapseable -->
          </div>

          <div>
              <!-- stats -->
              <div class=\"pa-md\">
                  <div class=\"row\">
                      <div class=\"col-sm-12\">
                          <div class=\"panel\">
                              <div class=\"panel-body box-layout\">
                                  <div class=\"col-md-3 va-m\">
                                      <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                          <span class=\"ri-twitter-x-line\"></span>
                                          ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.social.monitoring." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 78, $this->source); })()), "networkType", [], "any", false, false, false, 78)) . ".popularity")), "html", null, true);
        yield "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 82
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 82, $this->source); })()), "class" => "pull-right"]);
        yield "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 86
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["leadStats"]) || array_key_exists("leadStats", $context) ? $context["leadStats"] : (function () { throw new RuntimeError('Variable "leadStats" does not exist.', 86, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        yield "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 94
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs nav-tabs-contained\">
                  <li class=\"active\">
                      <a href=\"#leads-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "
                      </a>
                  </li>
              </ul>
              <!--/ tabs controls -->
          </div>

          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <!-- #events-container -->
              <div class=\"tab-pane active fade in bdr-w-0 page-list\" id=\"leads-container\">
                  ";
        // line 111
        yield (isset($context["monitorLeads"]) || array_key_exists("monitorLeads", $context) ? $context["monitorLeads"] : (function () { throw new RuntimeError('Variable "monitorLeads" does not exist.', 111, $this->source); })());
        yield "
              </div>
          </div>

      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- recent activity -->
          ";
        // line 121
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 121, $this->source); })())]);
        yield "
      </div>
      <!--/ right section -->

      <input id=\"itemId\" type=\"hidden\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125), "html", null, true);
        yield "\" />
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
        return "@MauticSocial/Monitoring/details.html.twig";
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
        return array (  236 => 125,  229 => 121,  216 => 111,  202 => 100,  193 => 94,  182 => 86,  175 => 82,  168 => 78,  146 => 59,  137 => 52,  135 => 51,  124 => 44,  117 => 43,  110 => 40,  103 => 39,  98 => 28,  97 => 27,  90 => 26,  85 => 15,  84 => 13,  77 => 12,  66 => 10,  55 => 8,  45 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Monitoring/details.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Monitoring/details.html.twig");
    }
}
