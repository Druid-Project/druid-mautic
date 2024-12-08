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

/* @MauticCore/Variant/index.html.twig */
class __TwigTemplate_196ecd1f9ff87bc676ea1c5f60778f78 extends Template
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
        // line 10
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            $context["nameGetter"] = ((array_key_exists("nameGetter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 11, $this->source); })()), "getName")) : ("getName"));
            // line 12
            $context["totalWeight"] = 0;
            // line 13
            $context["abStatsHeader"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.stats");
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["variants"] ?? null), "properties", [], "any", true, true, false, 14) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 14, $this->source); })()), "properties", [], "any", false, false, false, 14)))) {
                // line 15
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 15, $this->source); })()), "parent", [], "any", false, false, false, 15), "variantStartDate", [], "any", false, false, false, 15))) {
                    // line 16
                    yield "    <div class=\"box-layout mb-lg\">
        <div class=\"col-xs-10 va-m\">
            <h4>
                    ";
                    // line 19
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_start_date", ["%time%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toTime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 20
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 20, $this->source); })()), "parent", [], "any", false, false, false, 20), "variantStartDate", [], "any", false, false, false, 20)), "%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toShort(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 21
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 21, $this->source); })()), "parent", [], "any", false, false, false, 21), "variantStartDate", [], "any", false, false, false, 21)), "%full%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toTime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 22
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 22, $this->source); })()), "parent", [], "any", false, false, false, 22), "variantStartDate", [], "any", false, false, false, 22))]), "html", null, true);
                    // line 23
                    yield "
            </h4>
        </div>
        <!-- button -->
        <div class=\"col-xs-2 va-m text-right\">
            ";
                    // line 28
                    yield from                     $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Variant/index.html.twig", 28)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" =>                     // line 31
(isset($context["abStatsHeader"]) || array_key_exists("abStatsHeader", $context) ? $context["abStatsHeader"] : (function () { throw new RuntimeError('Variable "abStatsHeader" does not exist.', 31, $this->source); })()), "variant" => "primary", "href" => "#", "attributes" => ["data-toggle" => "modal", "data-target" => "#abStatsModal"]]]]));
                    // line 41
                    yield "        </div>
    </div>
  ";
                }
                // line 44
                yield "  <!--/ header -->

  <!-- start: variants list -->
  <ul class=\"list-group bdr-w-0\">
      ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 48, $this->source); })()), "parent", [], "any", false, false, false, 48)) {
                    // line 49
                    yield "          ";
                    // line 50
                    yield "          ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/row.html.twig", ["totalWeight" =>                     // line 51
(isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 51, $this->source); })()), "variant" => CoreExtension::getAttribute($this->env, $this->source,                     // line 52
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 52, $this->source); })()), "parent", [], "any", false, false, false, 52), "variants" =>                     // line 53
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 53, $this->source); })()), "abTestResults" =>                     // line 54
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 54, $this->source); })()), "actionRoute" =>                     // line 55
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 55, $this->source); })()), "activeEntity" =>                     // line 56
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 56, $this->source); })()), "model" =>                     // line 57
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 57, $this->source); })()), "nameGetter" =>                     // line 58
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 58, $this->source); })())]);
                    // line 59
                    yield "
      ";
                }
                // line 61
                yield "      ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 61, $this->source); })()), "children", [], "any", false, false, false, 61)) > 0)) {
                    // line 62
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 62, $this->source); })()), "children", [], "any", false, false, false, 62));
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
                    foreach ($context['_seq'] as $context["id"] => $context["variant"]) {
                        // line 63
                        yield "              ";
                        // line 64
                        yield "              ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/row.html.twig", ["totalWeight" =>                         // line 65
(isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 65, $this->source); })()), "variant" =>                         // line 66
$context["variant"], "variants" =>                         // line 67
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 67, $this->source); })()), "abTestResults" =>                         // line 68
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 68, $this->source); })()), "actionRoute" =>                         // line 69
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 69, $this->source); })()), "activeEntity" =>                         // line 70
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 70, $this->source); })()), "model" =>                         // line 71
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 71, $this->source); })()), "nameGetter" =>                         // line 72
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 72, $this->source); })())]);
                        // line 73
                        yield "
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
                    unset($context['_seq'], $context['id'], $context['variant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    yield "      ";
                }
                // line 76
                yield "  </ul>
  <!--/ end: variants list -->

  ";
                // line 79
                $context["bodyContent"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.noresults");
                // line 80
                yield "  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["abTestResults"] ?? null), "supportTemplate", [], "any", true, true, false, 80)) {
                    // line 81
                    yield "      ";
                    $context["bodyContent"] = Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 81, $this->source); })()), "supportTemplate", [], "any", false, false, false, 81), ["results" => (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 81, $this->source); })()), "variants" => (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 81, $this->source); })())]);
                    // line 82
                    yield "  ";
                }
                // line 83
                yield "  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "abStatsModal", "header" =>                 // line 85
(isset($context["abStatsHeader"]) || array_key_exists("abStatsHeader", $context) ? $context["abStatsHeader"] : (function () { throw new RuntimeError('Variable "abStatsHeader" does not exist.', 85, $this->source); })()), "body" =>                 // line 86
(isset($context["bodyContent"]) || array_key_exists("bodyContent", $context) ? $context["bodyContent"] : (function () { throw new RuntimeError('Variable "bodyContent" does not exist.', 86, $this->source); })()), "size" => "lg"]);
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_2_);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Variant/index.html.twig";
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
        return array (  180 => 10,  175 => 86,  174 => 85,  172 => 83,  169 => 82,  166 => 81,  163 => 80,  161 => 79,  156 => 76,  153 => 75,  138 => 73,  136 => 72,  135 => 71,  134 => 70,  133 => 69,  132 => 68,  131 => 67,  130 => 66,  129 => 65,  127 => 64,  125 => 63,  107 => 62,  104 => 61,  100 => 59,  98 => 58,  97 => 57,  96 => 56,  95 => 55,  94 => 54,  93 => 53,  92 => 52,  91 => 51,  89 => 50,  87 => 49,  85 => 48,  79 => 44,  74 => 41,  72 => 31,  71 => 28,  64 => 23,  62 => 22,  61 => 21,  60 => 20,  59 => 19,  54 => 16,  52 => 15,  50 => 14,  48 => 13,  46 => 12,  44 => 11,  42 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Variant/index.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Variant/index.html.twig");
    }
}
