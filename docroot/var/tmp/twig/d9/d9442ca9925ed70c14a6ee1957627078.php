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

/* @bundles/ReportBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_bcbdc04f4b1eeb069b36cedb6e87072b extends Template
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
        yield "mautic.report.report.error.notfound=\"No report with an id of %id% was found!\"
mautic.report.report.notice.activated=\"<a href='%url%' data-toggle='ajax' data-menu-link='mautic_report_index'><strong>%name%</strong></a> is now active as the main report!\"
mautic.report.report.notice.batch_deleted=\"%count% reports have been deleted!\"
mautic.report.scheduled.already=\"Report %id% is already scheduled.\"
mautic.report.scheduled.to.now=\"Report %id% will be exported and sent to your email address %email%.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ReportBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/ReportBundle/Translations/en_US/flashes.ini", "/app/docroot/app/bundles/ReportBundle/Translations/en_US/flashes.ini");
    }
}
