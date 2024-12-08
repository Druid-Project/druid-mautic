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

/* @MauticDashboard/Dashboard/index.html.twig */
class __TwigTemplate_e68c4f9f934ae5899a898ad53a90823a extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticDashboard/Dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.header.index"), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "dashboard";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["routeBase" => "dashboard", "langVar" => "dashboard", "customButtons" => [["attr" => ["class" => "btn btn-primary btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "new"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.add")], "iconClass" => "ri-add-fill", "btnText" => "mautic.dashboard.widget.add", "primary" => true], ["attr" => ["class" => "btn btn-ghost btn-nospin", "href" => "javascript:void(0)", "onclick" => (("Mautic.saveDashboardLayout('" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.confirmation_layout_name")) . "');"), "data-toggle" => ""], "iconClass" => "ri-save-line", "btnText" => "mautic.dashboard.save_as_predefined"], ["attr" => ["class" => "btn btn-ghost btn-nospin", "href" => "javascript:void(0)", "onclick" => (((("Mautic.exportDashboardLayout('" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.confirmation_layout_name")) . "', '") . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "export"])) . "');"), "data-toggle" => ""], "iconClass" => "ri-export-line", "btnText" => "mautic.dashboard.export.widgets"], ["attr" => ["class" => "btn btn-ghost", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "import"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.import")], "iconClass" => "ri-import-line", "btnText" => "mautic.dashboard.widget.import"]]]);
        // line 54
        yield "
";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "  ";
        if ((true == CoreExtension::getAttribute($this->env, $this->source, (isset($context["phpVersion"]) || array_key_exists("phpVersion", $context) ? $context["phpVersion"] : (function () { throw new RuntimeError('Variable "phpVersion" does not exist.', 58, $this->source); })()), "isOutdated", [], "array", false, false, false, 58))) {
            // line 59
            yield "  <div class=\"pt-md pl-md col-md-12\">
      <div class=\"pt-md pl-md alert alert-warning\">
          <h3>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.phpversionwarning.title"), "html", null, true);
            yield "</h3>
          <p>";
            // line 62
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.phpversionwarning.body", ["%phpversion%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["phpVersion"]) || array_key_exists("phpVersion", $context) ? $context["phpVersion"] : (function () { throw new RuntimeError('Variable "phpVersion" does not exist.', 62, $this->source); })()), "version", [], "array", false, false, false, 62)]));
            yield "</p>
      </div>
  </div>
  ";
        }
        // line 66
        yield "
  <div class=\"row pt-md ml-0\">
      <div class=\"col-sm-12\">
        <div class=\"d-flex fd-row fw-nowrap gap-sm ai-center jc-space-between\">
            ";
        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 70, $this->source); })())]);
        yield "
            <div class=\"dropdown\">
                <a href=\"#\" class=\"btn btn-ghost btn-sm btn-nospin\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.quick_filters"), "html", null, true);
        yield "
                  <i class=\"ri-arrow-down-s-line\"></i>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\" onclick=\"Mautic.setDateRange('today'); event.preventDefault();\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.date.today"), "html", null, true);
        yield "</a></li>
                  <li><a href=\"#\" onclick=\"Mautic.setDateRange('yesterday'); event.preventDefault();\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.date.yesterday"), "html", null, true);
        yield "</a></li>
                  <li><a href=\"#\" onclick=\"Mautic.setDateRange(7); event.preventDefault();\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.date.last_7_days"), "html", null, true);
        yield "</a></li>
                  <li><a href=\"#\" onclick=\"Mautic.setDateRange(30); event.preventDefault();\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.date.last_30_days"), "html", null, true);
        yield "</a></li>
                  <li><a href=\"#\" onclick=\"Mautic.setDateRange(90); event.preventDefault();\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.date.last_90_days"), "html", null, true);
        yield "</a></li>
                </ul>
              </div>
        </div>
      </div>
  </div>

  ";
        // line 88
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 88, $this->source); })())) > 0)) {
            // line 89
            yield "      <div id=\"dashboard-widgets\" class=\"dashboard-widgets cards\">
          ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 90, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 91
                yield "              <div class=\"card-flex widget\" data-widget-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 91), "html", null, true);
                yield "\" style=\"width: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", false, false, false, 91), 100)) : (100)), "html", null, true);
                yield "%; height: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "height", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "height", [], "any", false, false, false, 91), 300)) : (300)), "html", null, true);
                yield "px\">
                  <div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div>
                  ";
                // line 93
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticDashboard/Dashboard/widget.html.twig", ["widget" => $context["widget"]]);
                yield "
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
            unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "      </div>
      <div id=\"cloned-widgets\" class=\"dashboard-widgets cards\"></div>
  ";
        } else {
            // line 99
            yield "      <div class=\"well well col-md-6 col-md-offset-3 mt-md\">
          <div class=\"row\">
              <div class=\"mautibot-image col-xs-3 text-center\">
                  <img class=\"img-responsive\" style=\"max-height: 125px; margin-left: auto; margin-right: auto;\" src=\"";
            // line 102
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
            yield "\" />
              </div>
              <div class=\"col-xs-9\">
                  <h4><i class=\"ri-double-quotes-l\"></i> ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.nowidgets.tip.header"), "html", null, true);
            yield " <i class=\"ri-double-quotes-r\"></i></h4>
                  <p class=\"mt-md\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.nowidgets.tip"), "html", null, true);
            yield "</p>
                  ";
            // line 107
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticDashboard/Dashboard/index.html.twig", 107)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.dashboard.apply_default", "variant" => "success", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "applyDashboardFile", "file" => "default.json"])]]]));
            // line 116
            yield "              </div>
          </div>
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
        return "@MauticDashboard/Dashboard/index.html.twig";
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
        return array (  237 => 116,  235 => 107,  231 => 106,  227 => 105,  221 => 102,  216 => 99,  211 => 96,  194 => 93,  184 => 91,  167 => 90,  164 => 89,  162 => 88,  152 => 81,  148 => 80,  144 => 79,  140 => 78,  136 => 77,  129 => 73,  123 => 70,  117 => 66,  110 => 62,  106 => 61,  102 => 59,  99 => 58,  92 => 57,  86 => 54,  83 => 8,  76 => 7,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Dashboard/index.html.twig", "/app/docroot/app/bundles/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}
