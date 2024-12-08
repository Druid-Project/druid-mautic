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

/* @MauticEmail/Email/template_graph.html.twig */
class __TwigTemplate_3effd03dccea0a03595088174b58809e extends Template
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
        yield "<!--
some stats: need more input on what type of form data to show.
delete if it is not require
-->
<div class=\"pa-md\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 8
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 8, $this->source); })())) {
            // line 9
            yield "            <div class=\"text-right small\">
                <span>
                    ";
            // line 11
            if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 11, $this->source); })())) {
                // line 12
                yield "                        <span data-chart=\"variant\">";
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.variant.graph.variant", [], "messages");
                yield "</span>
                    ";
            } else {
                // line 14
                yield "                        <a data-chart=\"variant\" href=\"javascript:void(0)\">";
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.variant.graph.variant", [], "messages");
                yield "</a>
                    ";
            }
            // line 16
            yield "                </span>
                </span> | </span>
                <span>
                    ";
            // line 19
            if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 19, $this->source); })())) {
                // line 20
                yield "                        <a data-chart=\"all\" href=\"javascript:void(0)\">";
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.variant.graph.all", [], "messages");
                yield "</a>
                    ";
            } else {
                // line 22
                yield "                        <span data-chart=\"all\">";
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.variant.graph.all", [], "messages");
                yield "</span>
                    ";
            }
            // line 24
            yield "                </span>
            </div>
            ";
        }
        // line 27
        yield "            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"ri-mail-line\"></span>
                            ";
        // line 32
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.stats", [], "messages");
        // line 33
        yield "                        </h5>
                    </div>
                    <div class=\"col-xs-8 va-m\">";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 37
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 37, $this->source); })()), "class" => "pull-right"]);
        // line 41
        yield "</div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 45
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 50
        yield "</div>
            </div>
        </div>
    </div>
</div>
<!--/ some stats -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/template_graph.html.twig";
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
        return array (  118 => 50,  116 => 45,  115 => 44,  111 => 41,  109 => 37,  108 => 36,  104 => 33,  102 => 32,  95 => 27,  90 => 24,  84 => 22,  78 => 20,  76 => 19,  71 => 16,  65 => 14,  59 => 12,  57 => 11,  53 => 9,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/template_graph.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Email/template_graph.html.twig");
    }
}
