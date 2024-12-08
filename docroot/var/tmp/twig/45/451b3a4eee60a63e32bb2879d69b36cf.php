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

/* @MauticReport/Report/details_data_graphs.html.twig */
class __TwigTemplate_df28b4a169c7ec9ceba578f8114680f1 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 1, $this->source); })())) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "    <div class=\"mt-lg pa-md\" style=\"clear: both\">
        <div class=\"row equal\">";
            // line 4
            $context["rowCount"] = 0;
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 5, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["graphs"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()), [], "array", false, true, false, 5), "data", [], "any", true, true, false, 5); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 6
                yield "                ";
                if (((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 6, $this->source); })()) >= 12)) {
                    // line 7
                    yield "                    </div><div class=\"row equal\">";
                    // line 8
                    $context["rowCount"] = 0;
                }
                // line 10
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@MauticReport/Graph/" . Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 10, $this->source); })()), $context["key"], [], "array", false, false, false, 10), "type", [], "any", false, false, false, 10))) . ".html.twig"), ["graph" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 11
(isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 11, $this->source); })()), $context["key"], [], "array", false, false, false, 11), "data", [], "any", false, false, false, 11), "options" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 12
(isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 12, $this->source); })()), $context["key"], [], "array", false, false, false, 12), "options", [], "any", false, false, false, 12), "report" =>                 // line 13
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 13, $this->source); })())]);
                // line 15
                $context["rowCount"] = ((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 15, $this->source); })()) + ((("line" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 15, $this->source); })()), $context["key"], [], "array", false, false, false, 15), "type", [], "any", false, false, false, 15))) ? (12) : (4)));
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
            unset($context['_seq'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
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
        return "@MauticReport/Report/details_data_graphs.html.twig";
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
        return array (  94 => 17,  80 => 15,  78 => 13,  77 => 12,  76 => 11,  74 => 10,  71 => 8,  69 => 7,  66 => 6,  49 => 5,  47 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/details_data_graphs.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/Report/details_data_graphs.html.twig");
    }
}
