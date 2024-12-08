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

/* @MauticPlugin/Integration/grid.html.twig */
class __TwigTemplate_8f422963c9022a32705bd65e0d5cc4da extends Template
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
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 11
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 11, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPlugin/Integration/grid.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })()));
        // line 9
        $context["tmpl"] = "list";
        // line 10
        $context["filterValue"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pluginFilter"] ?? null), "id", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pluginFilter"] ?? null), "id", [], "any", false, false, false, 10), null)) : (null));
        // line 11
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "integration";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.manage.plugins"), "html", null, true);
        yield " ";
        if ((isset($context["pluginFilter"]) || array_key_exists("pluginFilter", $context) ? $context["pluginFilter"] : (function () { throw new RuntimeError('Variable "pluginFilter" does not exist.', 16, $this->source); })())) {
            yield "- ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pluginFilter"]) || array_key_exists("pluginFilter", $context) ? $context["pluginFilter"] : (function () { throw new RuntimeError('Variable "pluginFilter" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        }
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => [["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_reload"), "class" => "btn btn-primary"], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.reload.plugins"), "iconClass" => "ri-instance-fill", "tooltip" => "mautic.plugin.reload.plugins.tooltip"]]]);
        // line 33
        yield "
";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 37, $this->source); })())) {
            // line 38
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">
        <div class=\"panel-body\">
            <div class=\"box-layout\">
                <div class=\"row\">
                    <div class=\"col-xs-3 va-m\">
                        <select id=\"integrationFilter\" onchange=\"Mautic.filterIntegrations(true);\"
                                class=\"form-control\"
                                data-placeholder=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.filter.all"), "html", null, true);
            yield "\">
                            <option value=\"\"></option>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 48
                yield "                              <option ";
                if (((isset($context["filterValue"]) || array_key_exists("filterValue", $context) ? $context["filterValue"] : (function () { throw new RuntimeError('Variable "filterValue" does not exist.', 48, $this->source); })()) === CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "id", [], "any", false, false, false, 48))) {
                    yield "selected";
                }
                yield " value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "id", [], "any", false, false, false, 48));
                yield "\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 49), "html", null, true);
                // line 50
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plugin'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"page-list\">
  ";
        }
        // line 59
        yield "
  ";
        // line 60
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 60, $this->source); })())) > 0)) {
            // line 61
            yield "      <div class=\"pa-md\">
          <div class=\"row shuffle-integrations native-integrations\">
              ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                yield "                  ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 64), Twig\Extension\CoreExtension::keys((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 64, $this->source); })())))) {
                    // line 65
                    yield "                      ";
                    $context["pluginTitle"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 65, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 65), [], "array", false, false, false, 65), "name", [], "any", false, false, false, 65) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 65));
                    // line 66
                    yield "                  ";
                } else {
                    // line 67
                    yield "                      ";
                    $context["pluginTitle"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 67) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 67));
                    // line 68
                    yield "                  ";
                }
                // line 69
                yield "                  <div class=\"shuffle shuffle-item grid ma-10 pull-left text-center integration plugin";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 69), "html", null, true);
                yield " integration-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 69), "html", null, true);
                yield " ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "enabled", [], "any", false, false, false, 69)) {
                    yield "integration-disabled";
                }
                yield "\">
                      <div class=\"panel ovf-h pa-10\">
                          <a href=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isBundle", [], "any", false, false, false, 71)) ? ("mautic_plugin_info") : ("mautic_plugin_config")), ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 71)]), "html", null, true);
                yield "\"
                             ";
                // line 72
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isBundle", [], "any", false, false, false, 72)) {
                    yield "data-footer=\"false\"";
                }
                // line 73
                yield "                             data-prevent-dismiss=\"true\"
                             data-toggle=\"ajaxmodal\"
                             data-target=\"#IntegrationEditModal\"
                             data-header=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 76), "html", null, true);
                yield "\">
                              <p><img style=\"height: 78px;\" class=\"img img-responsive\" src=\"";
                // line 77
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 77));
                yield "\" /></p>
                              <h5 class=\"mt-20\">
                                  <span class=\"ellipsis\" data-toggle=\"tooltip\" title=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pluginTitle"]) || array_key_exists("pluginTitle", $context) ? $context["pluginTitle"] : (function () { throw new RuntimeError('Variable "pluginTitle" does not exist.', 79, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 79), "html", null, true);
                yield "</span>
                              </h5>
                          </a>
                      </div>
                  </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "          </div>
      </div>
      ";
            // line 87
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "IntegrationEditModal", "footerButtons" => true]);
            // line 90
            yield "
  ";
        } else {
            // line 92
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "mautic.integrations.noresults", "tip" => "mautic.integration.noresults.tip"]);
            // line 95
            yield "
  ";
        }
        // line 97
        yield "
  ";
        // line 98
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 98, $this->source); })())) {
            // line 99
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
        return "@MauticPlugin/Integration/grid.html.twig";
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
        return array (  256 => 99,  254 => 98,  251 => 97,  247 => 95,  244 => 92,  240 => 90,  238 => 87,  234 => 85,  220 => 79,  215 => 77,  211 => 76,  206 => 73,  202 => 72,  198 => 71,  186 => 69,  183 => 68,  180 => 67,  177 => 66,  174 => 65,  171 => 64,  167 => 63,  163 => 61,  161 => 60,  158 => 59,  149 => 52,  142 => 50,  140 => 49,  132 => 48,  128 => 47,  123 => 45,  114 => 38,  111 => 37,  104 => 36,  98 => 33,  96 => 20,  89 => 19,  78 => 16,  71 => 15,  60 => 13,  56 => 11,  54 => 10,  52 => 9,  50 => 8,  43 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPlugin/Integration/grid.html.twig", "/app/docroot/app/bundles/PluginBundle/Resources/views/Integration/grid.html.twig");
    }
}
