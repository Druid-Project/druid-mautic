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

/* @MauticDashboard/Dashboard/import.html.twig */
class __TwigTemplate_0ccc90f93691cb887df7cfcbfc1eaa44 extends Template
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticDashboard/Dashboard/import.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.import"), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "dashboardImport";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  <div class=\"row\">
    ";
        // line 9
        if ((isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "        <div class=\"col-sm-6\">
            <div class=\"ml-sm mt-sm pa-sm\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.predefined"), "html", null, true);
            yield "</div>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"list-group bdr-w-0\">
                            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["dashboard"] => $context["config"]) {
                // line 19
                yield "                                <div class=\"list-group-item mt-md ";
                yield ((($context["dashboard"] == (isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 19, $this->source); })()))) ? ("active") : (""));
                yield "\">
                                    <h4 class=\"list-group-item-heading\">";
                // line 20
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "name", [], "any", false, false, false, 20));
                yield "</h4>
                                    ";
                // line 21
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "description", [], "any", false, false, false, 21))) {
                    yield "<p class=\"small\">";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "description", [], "any", false, false, false, 21));
                    yield "</p>";
                }
                // line 22
                yield "                                    <p class=\"list-group-item-text\">
                                        <a href=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "import", "preview" => $context["dashboard"]]), "html", null, true);
                yield "\">
                                            ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.preview"), "html", null, true);
                yield "
                                        </a>&#183;
                                        <a href=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "applyDashboardFile", "file" => ((CoreExtension::getAttribute($this->env, $this->source, $context["config"], "type", [], "any", false, false, false, 26) . ".") . $context["dashboard"])]), "html", null, true);
                yield "\">
                                            ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.apply"), "html", null, true);
                yield "
                                        </a>";
                // line 28
                if (("user" == CoreExtension::getAttribute($this->env, $this->source, $context["config"], "type", [], "any", false, false, false, 28))) {
                    yield "&#183;
                                        <a href=\"";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "deleteDashboardFile", "file" => ((CoreExtension::getAttribute($this->env, $this->source, $context["config"], "type", [], "any", false, false, false, 29) . ".") . $context["dashboard"])]), "html", null, true);
                    yield "\" data-toggle=\"confirmation\" data-message=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.delete_layout"));
                    yield "\" data-confirm-text=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"));
                    yield "\" data-confirm-callback=\"executeAction\" data-cancel-text=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"));
                    yield "\">
                                            ";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"), "html", null, true);
                    yield "
                                        </a>";
                }
                // line 32
                yield "                                    </p>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['dashboard'], $context['config'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 41
        yield "      <div class=\"col-sm-6\">
          <div class=\"mr-sm mt-sm pa-sm\">
              <div class=\"panel panel-info\">
                  <div class=\"panel-heading\">
                      <div class=\"panel-title\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.import.start.instructions"), "html", null, true);
        yield "</div>
                  </div>
                  <div class=\"panel-body\">
                      ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start');
        yield "
                      <div class=\"input-group well mt-lg\">
                          ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "file", [], "any", false, false, false, 50), 'widget');
        yield "
                          <span class=\"input-group-btn\">
                              ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "start", [], "any", false, false, false, 52), 'widget');
        yield "
                          </span>
                      </div>
                      ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        yield "
                  </div>
              </div>
          </div>
      </div>
  </div>
  ";
        // line 61
        if ((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 61, $this->source); })())) {
            // line 62
            yield "      <div class=\"col-md-12\">
          <h2>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widgets.preview"), "html", null, true);
            yield "</h2>
      </div>
      <div id=\"dashboard-widgets\" class=\"dashboard-widgets cards\">
          ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 66, $this->source); })()));
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
                // line 67
                yield "              <div class=\"card-flex widget\" data-widget-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 67), "html", null, true);
                yield "\" style=\"width: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", false, false, false, 67), "100")) : ("100")), "html", null, true);
                yield "%; height: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "height", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "height", [], "any", false, false, false, 67), "300")) : ("300")), "html", null, true);
                yield "px;\">
                  ";
                // line 68
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticDashboard/Widget/detail.html.twig", ["widget" => $context["widget"]]);
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
            // line 71
            yield "      </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDashboard/Dashboard/import.html.twig";
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
        return array (  265 => 71,  248 => 68,  239 => 67,  222 => 66,  216 => 63,  213 => 62,  211 => 61,  202 => 55,  196 => 52,  191 => 50,  186 => 48,  180 => 45,  174 => 41,  166 => 35,  158 => 32,  153 => 30,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  126 => 24,  122 => 23,  119 => 22,  113 => 21,  109 => 20,  104 => 19,  100 => 18,  93 => 14,  87 => 10,  85 => 9,  82 => 8,  75 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Dashboard/import.html.twig", "/app/docroot/app/bundles/DashboardBundle/Resources/views/Dashboard/import.html.twig");
    }
}
