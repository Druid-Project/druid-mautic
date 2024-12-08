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

/* @MauticNotification/Notification/list_graph.html.twig */
class __TwigTemplate_6a2a3bfb947f66fbf3fc4f3e022c554b extends Template
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
        // line 5
        yield "<!-- some stats -->
<div class=\"pa-md\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 9
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "            <div class=\"text-right small\">
                <span>
                    ";
            // line 12
            if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 12, $this->source); })())) {
                // line 13
                yield "                        <span data-chart=\"variant\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.variant.graph.variant"), "html", null, true);
                yield "</span>
                    ";
            } else {
                // line 15
                yield "                        <a data-chart=\"variant\" href=\"javascript:void(0)\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.variant.graph.variant"), "html", null, true);
                yield "</a>
                    ";
            }
            // line 17
            yield "                </span>
                </span> | </span>
                <span>
                    ";
            // line 20
            if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 20, $this->source); })())) {
                // line 21
                yield "                        <a data-chart=\"all\" href=\"javascript:void(0)\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.variant.graph.all"), "html", null, true);
                yield "</a>
                    ";
            } else {
                // line 23
                yield "                        <span data-chart=\"all\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.variant.graph.all"), "html", null, true);
                yield "</span>
                    ";
            }
            // line 25
            yield "                </span>
            </div>
            ";
        }
        // line 28
        yield "            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"ri-mail-line\"></span>
                            ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.lead.list.comparison"), "html", null, true);
        yield "
                        </h5>
                    </div>
                    <div class=\"col-xs-8 va-m\" id=\"legend\"></div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">
                    <div>
                        <canvas id=\"list-compare-chart\" height=\"300\"></canvas>
                    </div>
                </div>
                <div id=\"list-compare-chart-data\" class=\"hide\">";
        // line 43
        yield json_encode((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()));
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
        return "@MauticNotification/Notification/list_graph.html.twig";
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
        return array (  112 => 43,  99 => 33,  92 => 28,  87 => 25,  81 => 23,  75 => 21,  73 => 20,  68 => 17,  62 => 15,  56 => 13,  54 => 12,  50 => 10,  48 => 9,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/Notification/list_graph.html.twig", "/app/docroot/app/bundles/NotificationBundle/Resources/views/Notification/list_graph.html.twig");
    }
}
