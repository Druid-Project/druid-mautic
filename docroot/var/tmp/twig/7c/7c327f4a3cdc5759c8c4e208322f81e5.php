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

/* @MauticReport/Graph/Table.html.twig */
class __TwigTemplate_d879b7a6ae5ee5002d26ec42c163f0a9 extends Template
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
        yield "<div class=\"col-md-4\">
    <div class=\"panel panel-default report-list\">
        <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)), "html", null, true);
        yield "
                    <div class=\"pull-right\">
                        <span class=\"fa ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
        yield "\"></span>
                    </div>
                </h3>
        </div>
        ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11)) > 0)) {
            // line 12
            yield "            <div class=\"table-responsive panel-collapse pull out\">
                ";
            // line 14
            yield "                <table class=\"table table-hover report-list\" id=\"reportTable\">
                    <thead>
                        <tr>
                            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 17, $this->source); })()), "data", [], "any", false, false, false, 17), 0, [], "array", false, false, false, 17), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ("id" != (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 17, $this->source); })())); }));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 18
                yield "                              <th class=\"col-report-count\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["key"]), "html", null, true);
                yield "</th>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 23, $this->source); })()), "data", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
                // line 24
                yield "                            ";
                if ( !(null === ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "array", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "array", false, false, false, 24), null)) : (null)))) {
                    // line 25
                    yield "                                <tr>
                                    ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                    foreach ($context['_seq'] as $context["cellName"] => $context["cell"]) {
                        // line 27
                        yield "                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["graph"] ?? null), "data", [], "any", false, true, false, 27), 0, [], "array", false, true, false, 27), "id", [], "any", true, true, false, 27) && ("title" == $context["cellName"])) && CoreExtension::getAttribute($this->env, $this->source, ($context["graph"] ?? null), "link", [], "any", true, true, false, 27))) {
                            // line 28
                            yield "                                            <td>
                                                <a href=\"";
                            // line 29
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 29, $this->source); })()), "link", [], "any", false, false, false, 29), ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                            yield "\" data-toggle=\"ajax\">
                                                    ";
                            // line 30
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cell"], "html", null, true);
                            yield "
                                                </a>
                                            </td>
                                        ";
                        } elseif (("id" !=                         // line 33
$context["cellName"])) {
                            // line 34
                            yield "                                            <td>
                                                ";
                            // line 35
                            if ($this->env->getTest('numeric')->getCallable()($context["cell"])) {
                                // line 36
                                yield "                                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cell"], "html", null, true);
                                yield "
                                                ";
                            } else {
                                // line 38
                                yield "                                                    ";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks($context["cell"]);
                                yield "
                                                ";
                            }
                            // line 40
                            yield "                                            </td>
                                        ";
                        }
                        // line 42
                        yield "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['cellName'], $context['cell'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    yield "                                </tr>
                            ";
                }
                // line 45
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['rowKey'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 50
            yield "            <div class=\"panel-body box-layout\">
                <p class=\"text-muted\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.table.noresults"), "html", null, true);
            yield "</p>
            </div>
        ";
        }
        // line 54
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Graph/Table.html.twig";
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
        return array (  172 => 54,  166 => 51,  163 => 50,  157 => 46,  151 => 45,  147 => 43,  141 => 42,  137 => 40,  131 => 38,  125 => 36,  123 => 35,  120 => 34,  118 => 33,  112 => 30,  108 => 29,  105 => 28,  102 => 27,  98 => 26,  95 => 25,  92 => 24,  88 => 23,  83 => 20,  74 => 18,  70 => 17,  65 => 14,  62 => 12,  60 => 11,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Graph/Table.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/Graph/Table.html.twig");
    }
}
