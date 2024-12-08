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

/* @MauticCore/Variant/row.html.twig */
class __TwigTemplate_df6513be018c0ec4f1472bf24f51d4a1 extends Template
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
        // line 13
        $context["id"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13);
        // line 14
        yield "
";
        // line 15
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["variants"] ?? null), "properties", [], "any", false, true, false, 15), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), [], "array", true, true, false, 15)) {
            // line 16
            yield "    ";
            $context["settings"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 16, $this->source); })()), "variantSettings", [], "any", false, false, false, 16);
            // line 17
            yield "    ";
            $context["variants"] = Twig\Extension\CoreExtension::merge((isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 17, $this->source); })()), ["properties" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 18, $this->source); })()), "properties", [], "any", false, false, false, 18), [            // line 19
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()) => (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 19, $this->source); })())])]);
        }
        // line 23
        yield "
";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 24, $this->source); })()), "properties", [], "any", false, false, false, 24), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24))) {
            // line 25
            yield "    ";
            $context["thisCriteria"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 25, $this->source); })()), "properties", [], "any", false, false, false, 25), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()), [], "array", false, false, false, 25), "winnerCriteria", [], "any", false, false, false, 25);
            // line 26
            yield "    ";
            $context["weight"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 26, $this->source); })()), "properties", [], "any", false, false, false, 26), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26), "weight", [], "any", false, false, false, 26);
            // line 27
            yield "    ";
            $context["criteriaLabel"] = (((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 27, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 27, $this->source); })()), "criteria", [], "any", false, false, false, 27), (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27), "label", [], "any", false, false, false, 27))) : (""));
        } else {
            // line 29
            yield "    ";
            [$context["thisCriteria"], $context["criteriaLabel"], $context["weight"]] =             ["", "", 0];
        }
        // line 31
        yield "
";
        // line 32
        $context["isPublished"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 32, $this->source); })()), "isPublished", [], "any", false, false, false, 32);
        // line 33
        $context["totalWeight"] = ((isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 33, $this->source); })()) + (((isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 33, $this->source); })())) ? ((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 33, $this->source); })())) : (0)));
        // line 34
        $context["firstCriteria"] = ((array_key_exists("firstCriteria", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["firstCriteria"]) || array_key_exists("firstCriteria", $context) ? $context["firstCriteria"] : (function () { throw new RuntimeError('Variable "firstCriteria" does not exist.', 34, $this->source); })()), (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 34, $this->source); })()))) : ((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 34, $this->source); })())));
        // line 35
        $context["isWinner"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["abTestResults"] ?? null), "winners", [], "any", true, true, false, 35) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 35, $this->source); })()), "winners", [], "any", false, false, false, 35))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 35, $this->source); })()), "parent", [], "any", false, false, false, 35), "variantStartDate", [], "any", false, false, false, 35)) && (isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 35, $this->source); })()));
        // line 36
        $context["actionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 36, $this->source); })()), ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]);
        // line 37
        $context["isCurrent"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37));
        // line 38
        yield "
<li class=\"list-group-item bg-";
        // line 39
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 39, $this->source); })())) {
            yield "dark";
        } else {
            yield "light";
        }
        yield "-xs\">
    <div class=\"box-layout\">
        <div class=\"col-md-8 va-m\">
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <h3>
                        ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 46
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 46, $this->source); })()), "model" =>         // line 47
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 47, $this->source); })()), "size" => "", "query" => "size="]);
        // line 50
        yield "
                    </h3>
                </div>
                <div class=\"col-xs-11\">
                    ";
        // line 54
        if ((isset($context["isWinner"]) || array_key_exists("isWinner", $context) ? $context["isWinner"] : (function () { throw new RuntimeError('Variable "isWinner" does not exist.', 54, $this->source); })())) {
            // line 55
            yield "                        <div class=\"mr-xs pull-left\" data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.make_winner"), "html", null, true);
            yield "\">
                            ";
            // line 56
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Variant/row.html.twig", 56)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.ab_test.make_winner", "variant" => "warning", "icon_only" => true, "icon" => "ri-trophy-fill", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 63
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 63, $this->source); })()), ["objectAction" => "winner", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "attributes" => ["data-toggle" => "confirmation", "data-message" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.confirm_make_winner", ["%name%" => CoreExtension::getAttribute($this->env, $this->source,             // line 66
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 66, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 66, $this->source); })()), [], "any", false, false, false, 66)])), "data-confirm-text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.make_winner")), "data-confirm-callback" => "executeAction", "data-cancel-text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"))]]]]));
            // line 74
            yield "                        </div>
                    ";
        }
        // line 76
        yield "                    <h5 class=\"fw-sb text-primary\">
                        <a href=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actionUrl"]) || array_key_exists("actionUrl", $context) ? $context["actionUrl"] : (function () { throw new RuntimeError('Variable "actionUrl" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "\" data-toggle=\"ajax\">
                            ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 78, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 78, $this->source); })()), [], "any", false, false, false, 78), "html", null, true);
        yield "
                        </a>
                        ";
        // line 80
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 80, $this->source); })())) {
            // line 81
            yield "                            &nbsp;<span class=\"label label-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.current"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 83
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 83, $this->source); })()), "parent", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83))) {
            // line 84
            yield "                            &nbsp;<span class=\"label label-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.parent"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 86
        yield "                        ";
        if (($this->env->getTest('instanceof')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 86, $this->source); })()), "\\Mautic\\CoreBundle\\Entity\\TranslationEntityInterface") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 86, $this->source); })()), "isTranslation", [], "any", false, false, false, 86))) {
            // line 87
            yield "                            &nbsp;<span data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
            yield "\">
                                <i class=\"ri-fw ri-translate\"></i>
                            </span>
                        ";
        }
        // line 91
        yield "                    </h5>
                    ";
        // line 92
        if ($this->env->getFunction('method_exists')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 92, $this->source); })()), "getAlias")) {
            // line 93
            yield "                        <span class=\"text-white dark-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 93, $this->source); })()), "alias", [], "any", false, false, false, 93), "html", null, true);
            yield "</span>
                    ";
        }
        // line 95
        yield "                </div>
            </div>
        </div>
        <div class=\"col-md-4 va-t text-right\">
            <em class=\"text-white dark-sm\">
                ";
        // line 100
        if (((isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 100, $this->source); })()) && (((isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 100, $this->source); })()) > 100) || ((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 100, $this->source); })()) && ((isset($context["firstCriteria"]) || array_key_exists("firstCriteria", $context) ? $context["firstCriteria"] : (function () { throw new RuntimeError('Variable "firstCriteria" does not exist.', 100, $this->source); })()) != (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 100, $this->source); })())))))) {
            // line 101
            yield "                    <div class=\"text-danger\" data-toggle=\"label label-danger\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant.misconfiguration"), "html", null, true);
            yield "\">
                        <div><span class=\"badge\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 102, $this->source); })()), "html", null, true);
            yield "%</span></div>
                        <div><i class=\"ri-fw ri-alert-line\"></i>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 103, $this->source); })()), "html", null, true);
            yield "</div>
                    </div>
                ";
        } elseif ((        // line 105
(isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 105, $this->source); })()) && (isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 105, $this->source); })()))) {
            // line 106
            yield "                    <div class=\"text-success\">
                        <div><span class=\"label label-success\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 107, $this->source); })()), "html", null, true);
            yield "%</span></div>
                        <div><i class=\"ri-check-line\"></i>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 108, $this->source); })()), "html", null, true);
            yield "</div>
                    </div>
                ";
        } else {
            // line 111
            yield "                    <div class=\"text-muted\">
                        <div><span size=\"sm\" class=\"label label-gray\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 112, $this->source); })()), "html", null, true);
            yield "%</span></div>
                        <div>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "</div>
                    </div>
                ";
        }
        // line 116
        yield "            </em>
        </div>
    </div>
</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Variant/row.html.twig";
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
        return array (  235 => 116,  229 => 113,  225 => 112,  222 => 111,  216 => 108,  212 => 107,  209 => 106,  207 => 105,  202 => 103,  198 => 102,  193 => 101,  191 => 100,  184 => 95,  178 => 93,  176 => 92,  173 => 91,  165 => 87,  162 => 86,  156 => 84,  153 => 83,  147 => 81,  145 => 80,  140 => 78,  136 => 77,  133 => 76,  129 => 74,  127 => 66,  126 => 63,  125 => 56,  120 => 55,  118 => 54,  112 => 50,  110 => 47,  109 => 46,  108 => 45,  95 => 39,  92 => 38,  90 => 37,  88 => 36,  86 => 35,  84 => 34,  82 => 33,  80 => 32,  77 => 31,  73 => 29,  69 => 27,  66 => 26,  63 => 25,  61 => 24,  58 => 23,  55 => 19,  54 => 18,  52 => 17,  49 => 16,  47 => 15,  44 => 14,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Variant/row.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Variant/row.html.twig");
    }
}
