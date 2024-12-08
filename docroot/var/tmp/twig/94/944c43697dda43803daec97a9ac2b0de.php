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

/* @MauticNotification/Notification/template_graph.html.twig */
class __TwigTemplate_81501cd565ddde6a1873d0dcea4b754e extends Template
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
            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"ri-mail-line\"></span>
                            ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.stats"), "html", null, true);
        yield "
                        </h5>
                    </div>
                    <div class=\"col-xs-6 va-m\" id=\"legend\"></div>
                    <div class=\"col-xs-2 va-m\">
                        ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["callback" => "updateNotificationStatsChart"]);
        yield "
                    </div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">
                    <div>
                        <canvas id=\"stat-chart\" height=\"300\"></canvas>
                    </div>
                </div>
                <div id=\"stat-chart-data\" class=\"hide\">";
        // line 27
        yield json_encode((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()));
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
        return "@MauticNotification/Notification/template_graph.html.twig";
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
        return array (  72 => 27,  61 => 19,  53 => 14,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/Notification/template_graph.html.twig", "/app/docroot/app/bundles/NotificationBundle/Resources/views/Notification/template_graph.html.twig");
    }
}
