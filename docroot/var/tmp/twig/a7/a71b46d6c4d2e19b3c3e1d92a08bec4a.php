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

/* @bundles/DashboardBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_be96d137d42ab15bae75c8610f60e249 extends Template
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
        yield "mautic.dashboard.notice.save=\"Dashboard snapshot '%name%'' is saved. <a href='%viewUrl%'>View all snapshots</a>.\"
mautic.dashboard.error.save=\"The dashboard snapshot could not be saved because %msg%\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/DashboardBundle/Translations/en_US/flashes.ini";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/DashboardBundle/Translations/en_US/flashes.ini", "/app/docroot/app/bundles/DashboardBundle/Translations/en_US/flashes.ini");
    }
}
