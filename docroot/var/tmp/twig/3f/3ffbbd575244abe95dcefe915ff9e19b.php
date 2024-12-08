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

/* @MauticLead/Company/form_fields.html.twig */
class __TwigTemplate_f76b091a11f9b413cacc2c95716c5036 extends Template
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
        // line 7
        $context["halfSize"] = ((array_key_exists("embedded", $context)) ? (6) : (4));
        // line 8
        $context["fullSize"] = ((array_key_exists("embedded", $context)) ? (12) : (8));
        // line 9
        yield "<!-- pane -->
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 10, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["group"]) {
            // line 11
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), $context["group"], [], "array", true, true, false, 11)) {
                // line 12
                yield "        ";
                $context["groupFields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 12, $this->source); })()), $context["group"], [], "array", false, false, false, 12);
                // line 13
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 13, $this->source); })()))) {
                    // line 14
                    yield "            <div class=\"tab-pane fade ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                        yield "in active";
                    }
                    yield " bdr-rds-0 bdr-w-0\" id=\"company-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
                    yield "\">
                ";
                    // line 15
                    if ( !array_key_exists("embedded", $context)) {
                        // line 16
                        yield "                    <div class=\"pa-md bdr-b\">
                        <h4 class=\"fw-sb\">";
                        // line 17
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["group"])), "html", null, true);
                        yield "</h4>
                    </div>
                ";
                    }
                    // line 20
                    yield "                <div class=\"pa-md\">
                    ";
                    // line 21
                    if (("core" == $context["group"])) {
                        // line 22
                        yield "                        <div class=\"form-group mb-0\">
                            <div class=\"row\">
                                ";
                        // line 24
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyname", [], "any", true, true, false, 24)) {
                            // line 25
                            yield "                                    <div class=\"col-sm-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 25, $this->source); })()), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "companyname", [], "any", false, false, false, 25), 'row');
                            yield "</div>
                                ";
                        }
                        // line 27
                        yield "                                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyemail", [], "any", true, true, false, 27)) {
                            // line 28
                            yield "                                    <div class=\"col-sm-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 28, $this->source); })()), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "companyemail", [], "any", false, false, false, 28), 'row');
                            yield "</div>
                                ";
                        }
                        // line 30
                        yield "                            </div>
                        </div>
                        <hr class=\"mnr-md mnl-md\">
                        ";
                        // line 33
                        if ((((((CoreExtension::getAttribute($this->env, $this->source,                         // line 34
($context["form"] ?? null), "companyaddress1", [], "any", true, true, false, 34) || CoreExtension::getAttribute($this->env, $this->source,                         // line 35
($context["form"] ?? null), "companyaddress2", [], "any", true, true, false, 35)) || CoreExtension::getAttribute($this->env, $this->source,                         // line 36
($context["form"] ?? null), "companycity", [], "any", true, true, false, 36)) || CoreExtension::getAttribute($this->env, $this->source,                         // line 37
($context["form"] ?? null), "companystate", [], "any", true, true, false, 37)) || CoreExtension::getAttribute($this->env, $this->source,                         // line 38
($context["form"] ?? null), "companyzipcode", [], "any", true, true, false, 38)) || CoreExtension::getAttribute($this->env, $this->source,                         // line 39
($context["form"] ?? null), "companycountry", [], "any", true, true, false, 39))) {
                            // line 41
                            yield "                            <div class=\"form-group mb-0\">
                                <label class=\"control-label mb-xs\">";
                            // line 42
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.field.address"), "html", null, true);
                            yield "</label>
                                ";
                            // line 43
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyaddress1", [], "any", true, true, false, 43)) {
                                // line 44
                                yield "                                    <div class=\"row mb-xs\">
                                        <div class=\"col-sm-";
                                // line 45
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fullSize"]) || array_key_exists("fullSize", $context) ? $context["fullSize"] : (function () { throw new RuntimeError('Variable "fullSize" does not exist.', 45, $this->source); })()), "html", null, true);
                                yield "\">
                                            ";
                                // line 46
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "companyaddress1", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "companyaddress1", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "label", [], "any", false, false, false, 46)]]);
                                yield "
                                        </div>
                                    </div>
                                ";
                            }
                            // line 50
                            yield "                                ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyaddress2", [], "any", true, true, false, 50)) {
                                // line 51
                                yield "                                    <div class=\"row mb-xs\">
                                        <div class=\"col-sm-";
                                // line 52
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fullSize"]) || array_key_exists("fullSize", $context) ? $context["fullSize"] : (function () { throw new RuntimeError('Variable "fullSize" does not exist.', 52, $this->source); })()), "html", null, true);
                                yield "\">
                                            ";
                                // line 53
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "companyaddress2", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "companyaddress2", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "label", [], "any", false, false, false, 53)]]);
                                yield "
                                        </div>
                                    </div>
                                ";
                            }
                            // line 57
                            yield "                                <div class=\"row mb-xs\">
                                    ";
                            // line 58
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companycity", [], "any", true, true, false, 58)) {
                                // line 59
                                yield "                                        <div class=\"col-sm-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 59, $this->source); })()), "html", null, true);
                                yield "\">
                                            ";
                                // line 60
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "companycity", [], "any", false, false, false, 60), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "companycity", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "label", [], "any", false, false, false, 60)]]);
                                yield "
                                        </div>
                                    ";
                            }
                            // line 63
                            yield "                                    ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companystate", [], "any", true, true, false, 63)) {
                                // line 64
                                yield "                                        <div class=\"col-sm-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 64, $this->source); })()), "html", null, true);
                                yield "\">
                                            ";
                                // line 65
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "companystate", [], "any", false, false, false, 65), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "companystate", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "label", [], "any", false, false, false, 65)]]);
                                yield "
                                        </div>
                                    ";
                            }
                            // line 68
                            yield "                                </div>
                                <div class=\"row mb-md\">
                                    ";
                            // line 70
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companyzipcode", [], "any", true, true, false, 70)) {
                                // line 71
                                yield "                                        <div class=\"col-sm-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 71, $this->source); })()), "html", null, true);
                                yield "\">
                                            ";
                                // line 72
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "companyzipcode", [], "any", false, false, false, 72), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "companyzipcode", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72)]]);
                                yield "
                                        </div>
                                    ";
                            }
                            // line 75
                            yield "                                    ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companycountry", [], "any", true, true, false, 75)) {
                                // line 76
                                yield "                                        <div class=\"col-sm-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 76, $this->source); })()), "html", null, true);
                                yield "\">
                                            ";
                                // line 77
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "companycountry", [], "any", false, false, false, 77), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "companycountry", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "label", [], "any", false, false, false, 77)]]);
                                yield "
                                        </div>
                                    ";
                            }
                            // line 80
                            yield "                                </div>
                                <div class=\"row\">
                                    <div  class=\"col-sm-";
                            // line 82
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 82, $this->source); })()), "html", null, true);
                            yield "\">
                                        ";
                            // line 83
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "score", [], "any", false, false, false, 83), 'row');
                            yield "
                                    </div>
                                    <div  class=\"col-sm-";
                            // line 85
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 85, $this->source); })()), "html", null, true);
                            yield "\">
                                        ";
                            // line 86
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "owner", [], "any", false, false, false, 86), 'row');
                            yield "
                                    </div>
                                </div>
                            </div>
                        ";
                        }
                        // line 91
                        yield "                        <hr class=\"mnr-md mnl-md\">
                    ";
                    }
                    // line 93
                    yield "                    <div class=\"form-group mb-0\">
                        <div class=\"row\">
                            ";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 95, $this->source); })()));
                    foreach ($context['_seq'] as $context["alias"] => $context["field"]) {
                        // line 96
                        yield "                                ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), $context["alias"], [], "array", false, false, false, 96), "isRendered", [], "any", false, false, false, 96)) {
                            // line 97
                            yield "                                  <div class=\"col-sm-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fullSize"]) || array_key_exists("fullSize", $context) ? $context["fullSize"] : (function () { throw new RuntimeError('Variable "fullSize" does not exist.', 97, $this->source); })()), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), $context["alias"], [], "array", false, false, false, 97), 'row');
                            yield "</div>
                                ";
                        }
                        // line 99
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['alias'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    yield "                        </div>
                    </div>
                    ";
                    // line 102
                    if ((array_key_exists("embedded", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "owner", [], "array", false, false, false, 102), "isRendered", [], "any", false, false, false, 102))) {
                        // line 103
                        yield "                        <hr class=\"mnr-md mnl-md\">
                        <div>";
                        // line 104
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "owner", [], "any", false, false, false, 104), 'row');
                        yield "</div>
                    ";
                    }
                    // line 106
                    yield "                </div>
            </div>
        ";
                }
                // line 109
                yield "    ";
            }
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
        unset($context['_seq'], $context['key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Company/form_fields.html.twig";
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
        return array (  312 => 109,  307 => 106,  302 => 104,  299 => 103,  297 => 102,  293 => 100,  287 => 99,  279 => 97,  276 => 96,  272 => 95,  268 => 93,  264 => 91,  256 => 86,  252 => 85,  247 => 83,  243 => 82,  239 => 80,  233 => 77,  228 => 76,  225 => 75,  219 => 72,  214 => 71,  212 => 70,  208 => 68,  202 => 65,  197 => 64,  194 => 63,  188 => 60,  183 => 59,  181 => 58,  178 => 57,  171 => 53,  167 => 52,  164 => 51,  161 => 50,  154 => 46,  150 => 45,  147 => 44,  145 => 43,  141 => 42,  138 => 41,  136 => 39,  135 => 38,  134 => 37,  133 => 36,  132 => 35,  131 => 34,  130 => 33,  125 => 30,  117 => 28,  114 => 27,  106 => 25,  104 => 24,  100 => 22,  98 => 21,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  49 => 10,  46 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Company/form_fields.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Company/form_fields.html.twig");
    }
}
