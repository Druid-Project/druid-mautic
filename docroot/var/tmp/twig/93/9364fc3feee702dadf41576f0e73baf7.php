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

/* @MauticCore/Helper/form_selecttype.html.twig */
class __TwigTemplate_6e09be470fe27b473c860054cd8d5339 extends Template
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
        yield "<script>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mauticLang"]) || array_key_exists("mauticLang", $context) ? $context["mauticLang"] : (function () { throw new RuntimeError('Variable "mauticLang" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["string"]) {
            // line 3
            yield "    mauticLang.";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield " = \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["string"]), "html", null, true);
            yield "\";
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['string'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        yield "</script>
<div class=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "-type-modal-backdrop\" style=\"width: 100%; height: 100%; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: #000000; opacity: 0.9; z-index: 9000\"></div>

<div class=\"modal fade in ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "-type-modal\" style=\"display: block; z-index: 9999;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <a href=\"javascript: void(0);\" onclick=\"Mautic.closeModalAndRedirect('.";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "-type-modal', '";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["cancelUrl"]) || array_key_exists("cancelUrl", $context) ? $context["cancelUrl"] : (function () { throw new RuntimeError('Variable "cancelUrl" does not exist.', 12, $this->source); })()));
        yield "');\" class=\"close\">
                    <span aria-hidden=\"true\">&times;</span>
                </a>
                <h4 class=\"modal-title\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 15, $this->source); })())), "html", null, true);
        yield "</h4>
                <div class=\"modal-loading-bar\"></div>
            </div>
            <div class=\"modal-body form-select-modal\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"panel panel-success\">
                            <div class=\"panel-heading row-no-gutters\">
                                <div class=\"col-xs-8 col-sm-10 np jc-center\">
                                    <h3 class=\"panel-title\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeOneHeader"]) || array_key_exists("typeOneHeader", $context) ? $context["typeOneHeader"] : (function () { throw new RuntimeError('Variable "typeOneHeader" does not exist.', 24, $this->source); })())), "html", null, true);
        yield "</h3>
                                </div>
                                <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 ai-end jc-center\">
                                    <i class=\"hidden-xs ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeOneIconClass"]) || array_key_exists("typeOneIconClass", $context) ? $context["typeOneIconClass"] : (function () { throw new RuntimeError('Variable "typeOneIconClass" does not exist.', 27, $this->source); })()), "html", null, true);
        yield " ri-lg\"></i>
                                    ";
        // line 28
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/form_selecttype.html.twig", 28)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "size" => "sm", "variant" => "ghost", "spin" => false, "onclick" =>         // line 35
(isset($context["typeOneOnClick"]) || array_key_exists("typeOneOnClick", $context) ? $context["typeOneOnClick"] : (function () { throw new RuntimeError('Variable "typeOneOnClick" does not exist.', 35, $this->source); })()), "attributes" => ["class" => "visible-xs pull-right text-primary"]]]]));
        // line 42
        yield "                                </div>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 45
        if ((array_key_exists("typeOneDescription", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["typeOneDescription"]) || array_key_exists("typeOneDescription", $context) ? $context["typeOneDescription"] : (function () { throw new RuntimeError('Variable "typeOneDescription" does not exist.', 45, $this->source); })())))) {
            // line 46
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeOneDescription"]) || array_key_exists("typeOneDescription", $context) ? $context["typeOneDescription"] : (function () { throw new RuntimeError('Variable "typeOneDescription" does not exist.', 46, $this->source); })())), "html", null, true);
            yield "
                                ";
        }
        // line 48
        yield "                                <ul class=\"ds-list-group ds-list-check\">
                                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeOneDifferences"]) || array_key_exists("typeOneDifferences", $context) ? $context["typeOneDifferences"] : (function () { throw new RuntimeError('Variable "typeOneDifferences" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["difference"]) {
            // line 50
            yield "                                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["difference"]), "html", null, true);
            yield "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['difference'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                                </ul>
                            </div>
                            <div class=\"hidden-xs panel-footer text-center\">
                                ";
        // line 55
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/form_selecttype.html.twig", 55)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "size" => "lg", "variant" => "ghost", "spin" => false, "onclick" =>         // line 62
(isset($context["typeOneOnClick"]) || array_key_exists("typeOneOnClick", $context) ? $context["typeOneOnClick"] : (function () { throw new RuntimeError('Variable "typeOneOnClick" does not exist.', 62, $this->source); })()), "attributes" => ["class" => "text-success"]]]]));
        // line 69
        yield "                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading row-no-gutters\">
                                <div class=\"col-xs-8 col-sm-10 np jc-center\">
                                    <h3 class=\"panel-title\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeTwoHeader"]) || array_key_exists("typeTwoHeader", $context) ? $context["typeTwoHeader"] : (function () { throw new RuntimeError('Variable "typeTwoHeader" does not exist.', 76, $this->source); })())), "html", null, true);
        yield "</h3>
                                </div>
                                <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 ai-end jc-center\">
                                    <i class=\"hidden-xs ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeTwoIconClass"]) || array_key_exists("typeTwoIconClass", $context) ? $context["typeTwoIconClass"] : (function () { throw new RuntimeError('Variable "typeTwoIconClass" does not exist.', 79, $this->source); })()), "html", null, true);
        yield " ri-lg\"></i>
                                    ";
        // line 80
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/form_selecttype.html.twig", 80)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "size" => "sm", "variant" => "ghost", "spin" => false, "onclick" =>         // line 87
(isset($context["typeTwoOnClick"]) || array_key_exists("typeTwoOnClick", $context) ? $context["typeTwoOnClick"] : (function () { throw new RuntimeError('Variable "typeTwoOnClick" does not exist.', 87, $this->source); })()), "attributes" => ["class" => "visible-xs pull-right text-primary"]]]]));
        // line 94
        yield "                                </div>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 97
        if ((array_key_exists("typeTwoDescription", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["typeTwoDescription"]) || array_key_exists("typeTwoDescription", $context) ? $context["typeTwoDescription"] : (function () { throw new RuntimeError('Variable "typeTwoDescription" does not exist.', 97, $this->source); })())))) {
            // line 98
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeTwoDescription"]) || array_key_exists("typeTwoDescription", $context) ? $context["typeTwoDescription"] : (function () { throw new RuntimeError('Variable "typeTwoDescription" does not exist.', 98, $this->source); })())), "html", null, true);
            yield "
                                ";
        }
        // line 100
        yield "                                <ul class=\"ds-list-group ds-list-check\">
                                    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeTwoDifferences"]) || array_key_exists("typeTwoDifferences", $context) ? $context["typeTwoDifferences"] : (function () { throw new RuntimeError('Variable "typeTwoDifferences" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["difference"]) {
            // line 102
            yield "                                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["difference"]), "html", null, true);
            yield "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['difference'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "                                </ul>
                            </div>
                            <div class=\"hidden-xs panel-footer text-center\">
                                ";
        // line 107
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/form_selecttype.html.twig", 107)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "size" => "lg", "variant" => "ghost", "spin" => false, "onclick" =>         // line 114
(isset($context["typeTwoOnClick"]) || array_key_exists("typeTwoOnClick", $context) ? $context["typeTwoOnClick"] : (function () { throw new RuntimeError('Variable "typeTwoOnClick" does not exist.', 114, $this->source); })()), "attributes" => ["class" => "text-primary"]]]]));
        // line 121
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/form_selecttype.html.twig";
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
        return array (  204 => 121,  202 => 114,  201 => 107,  196 => 104,  187 => 102,  183 => 101,  180 => 100,  174 => 98,  172 => 97,  167 => 94,  165 => 87,  164 => 80,  160 => 79,  154 => 76,  145 => 69,  143 => 62,  142 => 55,  137 => 52,  128 => 50,  124 => 49,  121 => 48,  115 => 46,  113 => 45,  108 => 42,  106 => 35,  105 => 28,  101 => 27,  95 => 24,  83 => 15,  75 => 12,  68 => 8,  63 => 6,  60 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/form_selecttype.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/form_selecttype.html.twig");
    }
}
